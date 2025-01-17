<?php

namespace Shoptet\Api\Sdk\Php\Authorization;

use DateTime;
use Shoptet\Api\Sdk\Php\Authorization\Token\BearerToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\PublicApiToken;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenRequestData;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenResponseData;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\GetAccessToken;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\GetAccessToken\PublicAccessTokenResponseData;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\HttpClient\ClientInterface;

/**
 * Request builder for Shoptet OAuth server endpoints.
 * - See https://developers.shoptet.com/api/documentation/getting-api-access-token/ for more information
 *   about obtaining API access token.
 * - See https://developers.shoptet.com/api/documentation/installing-the-addon/ for more information
 *   about obtaining OAuth access token after installation.
 */
class OAuth
{
    /**
     * OAuth constructor.
     *
     * @param ClientInterface $httpClient HTTP client for sending requests to Shoptet OAuth server
     * @param string $partnerProjectBaseUri base URI of partner eshop administration.
     *                                      This domain is used to request OAuth server.
     */
    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly string $partnerProjectBaseUri,
    ) {
    }

    /**
     * Use this method to call OAuth endpoint for obtaining access token after the addon is installed.
     * Need to build CreateOauthAccessTokenRequestData with data which is sent from installation.
     *
     * @param string $tokenId system unique oAuth access token identifier.
     * @param CreateOauthAccessTokenRequestData $requestData data used for oAuth server POST request body.
     *
     * @return BearerToken obtained and stored oAuth access token. Instance of Token interface.
     *
     * @throws ReflectionException
     * @throws ObtainAccessTokenFailedException
     */
    public function getOauthAccessToken(
        string $tokenId,
        CreateOauthAccessTokenRequestData $requestData
    ): BearerToken {
        $endpoint = new CreateOauthAccessToken(
            $this->partnerProjectBaseUri,
            ['Content-type' => 'application/json'],
            $this->httpClient
        );

        $endpoint->setBody($requestData);

        $response = $endpoint->execute();
        $body = $response->getBody();

        if (!$response->isSuccess() || $body === null) {
            throw new ObtainAccessTokenFailedException(
                sprintf('Server error! (Response: "%s")', json_encode($body))
            );
        }

        /** @var CreateOauthAccessTokenResponseData $body */
        return new BearerToken($tokenId, $body->getAccessToken());
    }

    /**
     * Create fresh (brand new / refresh expired) public API token for the given token ID and with OAuth access token.
     * See https://developers.shoptet.com/api/documentation/getting-api-access-token/ for more information.
     *
     * @param string $tokenId system unique token identifier.
     *                        Define token ID for the new token / refreshed one to replace.
     * @param BearerToken $oAuthAccessToken oAuth access token. This token is used to authorize for oAuth server.
     *
     * @return PublicApiToken fresh public api access token. Instance of Token interface.
     *
     * @throws UnauthorizedException
     * @throws ObtainAccessTokenFailedException
     * @throws MaximumTokenReachedException
     */
    public function getPublicAccessToken(string $tokenId, BearerToken $oAuthAccessToken): PublicApiToken
    {
        $endpoint = new GetAccessToken(
            $this->partnerProjectBaseUri,
            [$oAuthAccessToken->getHeaderName() => $oAuthAccessToken->getAccessToken()],
            $this->httpClient
        );

        $response = $endpoint->execute();

        /** @var PublicAccessTokenResponseData $body */
        $body = $response->getBody();

        if ($response->getStatusCode() === 401) {
            throw new UnauthorizedException('Cannot declare oAuth access token as valid!');
        }

        if ($body->getError() === 'maximum_tokens_reached') {
            throw new MaximumTokenReachedException();
        }

        if (!$response->isSuccess()) {
            throw new ObtainAccessTokenFailedException(
                sprintf('Server error! (Response: "%s")', json_encode($body))
            );
        }

        $expireAt = new DateTime();
        $expireAt->modify(sprintf('+%d seconds', $body->getExpiredIn()));

        return new PublicApiToken($tokenId, $body->getAccessToken(), $expireAt);
    }
}

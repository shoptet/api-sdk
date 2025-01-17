<?php

namespace Shoptet\Api\Sdk\Php\Authorization;

use Shoptet\Api\Sdk\Php\Authorization\Token\BearerToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\PublicApiToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\TokenStorage;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenRequestData;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\Sdk;

/**
 * Authorization facade.
 * Use this class to authorize requests, obtaining fresh public API tokens and handling addon installation callback,
 * which is used to obtain OAuth access tokens, after the addon is installed.
 *
 * For storing and loading tokens, use TokenStorage interface.
 */
class AuthorizationFacade
{
    public function __construct(
        private readonly TokenStorage $tokenStorage,
        private readonly OAuth $oAuth,
    ) {
    }

    /**
     * Authorize request with the given token. Add token to the request headers.
     *
     * @param string $tokenId system unique token identifier
     *
     * @throws TokenNotFoundException
     * @throws TokenHasExpiredException
     */
    public function authorizeRequest(string $tokenId): void
    {
        $token = $this->tokenStorage->loadToken($tokenId);

        if ($token->isExpired()) {
            throw new TokenHasExpiredException();
        }

        Sdk::setHeader($token->getHeaderName(), $token->getAccessToken());
    }

    /**
     * Create fresh (brand new / refresh expired) public API token with the given token ID and OAuth access token ID.
     * Tokens are loaded via TokenStorage and created token is stored back.
     * See https://developers.shoptet.com/api/documentation/getting-api-access-token/ for more information.
     *
     * @param string $tokenId system unique token identifier.
     *                        Define token ID for the new token / refreshed one to replace.
     * @param string $oAuthAccessTokenId system unique oAuth access token identifier.
     *                                   This token is loaded and used to authorize for oAuth server.
     *
     * @return PublicApiToken fresh public api access token. Instance of Token interface.
     *
     * @throws UnauthorizedException
     * @throws ObtainAccessTokenFailedException
     * @throws LogicException
     */
    public function createFreshPublicApiToken(string $tokenId, string $oAuthAccessTokenId): PublicApiToken
    {
        try {
            $oAuthAccessToken = $this->tokenStorage->loadToken($oAuthAccessTokenId);
        } catch (TokenNotFoundException) {
            throw new UnauthorizedException(sprintf(
                'Cannot find oAuthAccessToken for tokenId %s', $oAuthAccessTokenId
            ));
        }

        if (!($oAuthAccessToken instanceof BearerToken)) {
            throw new LogicException('OAuthAccessToken must be instance of BearerToken!');
        }

        $token = $this->oAuth->getPublicAccessToken($tokenId, $oAuthAccessToken);
        $this->tokenStorage->storeToken($token);

        return $token;
    }

    /**
     * Handle addon installation callback. Use this method to obtain OAuth access token after the addon is installed.
     * Need to build CreateOauthAccessTokenRequestData with data which is sent from installation.
     * See https://developers.shoptet.com/api/documentation/installing-the-addon/ for more information.
     *
     * @param string $tokenId system unique oAuth access token identifier.
     *                        Define token ID for the new token, which will be stored in defined token storage.
     * @param CreateOauthAccessTokenRequestData $requestData data used for oAuth server POST request body.
     *
     * @return BearerToken obtained and stored oAuth access token. Instance of Token interface.
     *
     * @throws ReflectionException
     * @throws ObtainAccessTokenFailedException
     */
    public function addonInstallationCallback(
        string $tokenId,
        CreateOauthAccessTokenRequestData $requestData
    ): BearerToken {
        $oAuthAccessToken = $this->oAuth->getOauthAccessToken($tokenId, $requestData);
        $this->tokenStorage->storeToken($oAuthAccessToken);

        return $oAuthAccessToken;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;

/**
 * Request data for creating OAuth access token. This class is used to build request body for OAuth server.
 * For more information see https://developers.shoptet.com/api/documentation/installing-the-addon/
 */
class CreateOauthAccessTokenRequestData extends Entity
{
    private const array REQUIRED_FIELDS = ['client_id', 'client_secret', 'code', 'redirect_uri'];

    /**
     * @var string your secret string for communicating with the OAuth server
     *             check value in Partner e-shop administration -> Connections -> API partner -> Access to API
     */
    protected string $client_secret;

    /**
     * @var string your client ID in the OAuth server. For a specific value,
     *             refer to Partner e-shop administration -> Connections -> API partner -> Access to API
     */
    protected string $client_id;

    /**
     * @var string sent as a GET parameter to your URL, which was entered in the addon settings. Time limited validity.
     */
    protected string $code;

    /**
     * @var string URL for authorization vs. OAuth server. For a specific value,
     *             refer to Partner e-shop administration -> Connections -> API partner -> Access to API
     */
    protected string $redirect_uri;

    /**
     * @var string oAuth server authorization type, always `authorization_code`, cannot be changed
     */
    protected string $grant_type = 'authorization_code';

    /**
     * @var string oAuth server rights group, always `api`, cannot be changed
     */
    protected string $scope = 'api';

    /**
     * CreateOauthAccessTokenRequestData constructor.
     *
     * @param array{
     *     client_secret: string,
     *     client_id: string,
     *     code: string,
     *     redirect_uri: string
     * } $data
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    public function __construct(array $data)
    {
        $missingRequiredFields = array_diff(self::REQUIRED_FIELDS, array_keys($data));

        if (count($missingRequiredFields) > 0) {
            throw new InvalidArgumentException(
                sprintf('Missing required fields %s', implode(', ', $missingRequiredFields))
            );
        }

        parent::__construct($data);
    }

    public function getClientSecret(): string
    {
        return $this->client_secret;
    }

    protected function setClientSecret(string $clientSecret): void
    {
        $this->client_secret = $clientSecret;
    }

    public function getClientId(): string
    {
        return $this->client_id;
    }

    protected function setClientId(string $clientId): void
    {
        $this->client_id = $clientId;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    protected function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getRedirectUri(): string
    {
        return $this->redirect_uri;
    }

    protected function setRedirectUri(string $redirectUri): void
    {
        $this->redirect_uri = $redirectUri;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function getGrantType(): string
    {
        return $this->grant_type;
    }
}

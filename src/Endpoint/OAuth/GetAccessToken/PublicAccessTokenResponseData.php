<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OAuth\GetAccessToken;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

/**
 * Response data for getting public access token. This class contains token value and metadata, created by OAuth server,
 * from the response.
 * For more information see https://developers.shoptet.com/api/documentation/getting-api-access-token/
 */
class PublicAccessTokenResponseData extends Entity
{
    /**
     * @var string oAuth access token value, created by OAuth server, from the response
     */
    protected string $accessToken;

    /**
     * @var int oAuth access token expiration time in seconds
     */
    protected int $expiresIn;

    /**
     * @var string|null error message if request was not successful
     */
    protected ?string $error = null;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    public function getExpiredIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): void
    {
        $this->error = $error;
    }
}

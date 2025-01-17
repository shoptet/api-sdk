<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

/**
 * Response data for creating oAuth access token. This class contains token value, created by OAuth server,
 * from the response.
 * For more information see https://developers.shoptet.com/api/documentation/installing-the-addon/
 */
class CreateOauthAccessTokenResponseData extends Entity
{
    /**
     * @var string oAuth access token value, created by OAuth server, from the response
     */
    protected string $accessToken;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }
}

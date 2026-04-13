<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OAuth;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\GetAccessToken\PublicAccessTokenResponseData;

/**
 * This class represents get request for obtaining public access token.
 * See https://developers.shoptet.com/api/documentation/getting-api-access-token/ for more information.
 */
class GetAccessToken extends Get
{
    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return PublicAccessTokenResponseData::class;
    }

    protected function getEndpoint(): string
    {
        return '/action/ApiOAuthServer/getAccessToken';
    }
}

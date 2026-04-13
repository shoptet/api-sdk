<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OAuth;

use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenRequestData;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenResponseData;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * This class represents post request for obtaining oAuth access token.
 * See https://developers.shoptet.com/api/documentation/installing-the-addon/ for more information.
 */
class CreateOauthAccessToken extends Post
{
    public function getRequestEntityClass(): string
    {
        return CreateOauthAccessTokenRequestData::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateOauthAccessTokenResponseData::class;
    }

    protected function getEndpoint(): string
    {
        return '/action/ApiOAuthServer/token';
    }
}

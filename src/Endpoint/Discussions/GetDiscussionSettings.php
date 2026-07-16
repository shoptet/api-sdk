<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions;

use Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetDiscussionSettingsResponse\GetDiscussionSettingsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/getdiscussionsettings
 *
 * @method GetDiscussionSettings setBody(null $entity)
 * @method null getBody()
 */
class GetDiscussionSettings extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDiscussionSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discussions/settings';
    }
}

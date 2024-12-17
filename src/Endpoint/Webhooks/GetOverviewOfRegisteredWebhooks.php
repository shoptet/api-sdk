<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetOverviewOfRegisteredWebhooksResponse\GetOverviewOfRegisteredWebhooksResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/getoverviewofregisteredwebhooks
 *
 * @method GetOverviewOfRegisteredWebhooks setBody(null $entity)
 * @method null getBody()
 */
class GetOverviewOfRegisteredWebhooks extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOverviewOfRegisteredWebhooksResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks';
    }
}

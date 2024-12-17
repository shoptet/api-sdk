<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetDetailOfRegisteredWebhooksResponse\GetDetailOfRegisteredWebhooksResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/getdetailofregisteredwebhooks
 *
 * @method GetDetailOfRegisteredWebhooks setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfRegisteredWebhooks extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfRegisteredWebhooksResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks/{id}';
    }
}

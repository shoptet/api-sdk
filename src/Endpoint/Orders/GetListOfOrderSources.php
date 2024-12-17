<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderSourcesResponse\GetListOfOrderSourcesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getlistofordersources
 *
 * @method GetListOfOrderSources setBody(null $entity)
 * @method null getBody()
 */
class GetListOfOrderSources extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfOrderSourcesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/sources';
    }
}

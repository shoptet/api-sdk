<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatusesResponse\GetListOfOrderStatusesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getlistoforderstatuses
 *
 * @method GetListOfOrderStatuses setBody(null $entity)
 * @method null getBody()
 */
class GetListOfOrderStatuses extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfOrderStatusesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/statuses';
    }
}

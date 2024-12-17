<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderDetailResponse\GetOrderDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getorderdetail
 *
 * @method GetOrderDetail setBody(null $entity)
 * @method null getBody()
 */
class GetOrderDetail extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOrderDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}';
    }
}

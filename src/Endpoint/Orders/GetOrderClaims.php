<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderClaimsResponse\GetOrderClaimsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getorderclaims
 *
 * @method GetOrderClaims setBody(null $entity)
 * @method null getBody()
 */
class GetOrderClaims extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'includeClosedAndCancelledOrders' => false,
        'productCode' => false,
        'orderCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOrderClaimsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/claims';
    }
}

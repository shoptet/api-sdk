<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemRequest\CreateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemResponse\CreateOrderItemResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/createorderitem
 *
 * @method CreateOrderItem setBody(null|array|CreateOrderItemRequest $entity)
 * @method null|CreateOrderItemRequest getBody()
 */
class CreateOrderItem extends Post
{
    protected array $supportedPathParams = ['code' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'suppressProductChecking' => false,
        'suppressStockMovements' => false,
    ];

    public function getRequestEntityClass(): string
    {
        return CreateOrderItemRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateOrderItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/item';
    }
}

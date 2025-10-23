<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderItems;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\DeleteOrderItemResponse\DeleteOrderItemResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/deleteorderitem
 *
 * @method DeleteOrderItem setBody(null $entity)
 * @method null getBody()
 */
class DeleteOrderItem extends Delete
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOrderItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/item/{id}';
    }
}

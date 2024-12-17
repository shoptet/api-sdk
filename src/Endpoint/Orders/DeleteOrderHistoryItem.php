<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderHistoryItemResponse\DeleteOrderHistoryItemResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/deleteorderhistoryitem
 *
 * @method DeleteOrderHistoryItem setBody(null $entity)
 * @method null getBody()
 */
class DeleteOrderHistoryItem extends Delete
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOrderHistoryItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/history/{id}';
    }
}

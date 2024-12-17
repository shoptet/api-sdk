<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderResponse\DeleteOrderResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/deleteorder
 *
 * @method DeleteOrder setBody(null $entity)
 * @method null getBody()
 */
class DeleteOrder extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}';
    }
}

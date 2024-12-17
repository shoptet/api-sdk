<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderItemRequest\UpdateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderItemResponse\UpdateOrderItemResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/updateorderitem
 *
 * @method UpdateOrderItem setBody(null|array|UpdateOrderItemRequest $entity)
 * @method null|UpdateOrderItemRequest getBody()
 */
class UpdateOrderItem extends Patch
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false, 'suppressProductGuidCheck' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateOrderItemRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateOrderItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/item/{id}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderItems;

use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\UpdateOrderItemRequest\UpdateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\UpdateOrderItemResponse\UpdateOrderItemResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/updateorderitem
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

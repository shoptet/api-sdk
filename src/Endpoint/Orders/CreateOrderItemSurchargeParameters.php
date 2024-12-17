<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersRequest\CreateOrderItemSurchargeParametersRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersResponse\CreateOrderItemSurchargeParametersResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/createorderitemsurchargeparameters
 *
 * @method CreateOrderItemSurchargeParameters setBody(null|array|CreateOrderItemSurchargeParametersRequest $entity)
 * @method null|CreateOrderItemSurchargeParametersRequest getBody()
 */
class CreateOrderItemSurchargeParameters extends Post
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateOrderItemSurchargeParametersRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateOrderItemSurchargeParametersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/item/{id}/surcharge-parameters';
    }
}

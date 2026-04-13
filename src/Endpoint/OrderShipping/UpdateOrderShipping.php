<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderShipping;

use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\UpdateOrderShippingRequest\UpdateOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\UpdateOrderShippingResponse\UpdateOrderShippingResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-shipping/updateordershipping
 *
 * @method UpdateOrderShipping setBody(null|array<string, mixed>|UpdateOrderShippingRequest $entity)
 * @method null|UpdateOrderShippingRequest getBody()
 */
class UpdateOrderShipping extends Patch
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateOrderShippingRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateOrderShippingResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/shipping/{id}';
    }
}

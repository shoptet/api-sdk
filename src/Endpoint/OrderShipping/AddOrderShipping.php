<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderShipping;

use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\AddOrderShippingRequest\AddOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\AddOrderShippingResponse\AddOrderShippingResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-shipping/addordershipping
 *
 * @method AddOrderShipping setBody(null|array<string, mixed>|AddOrderShippingRequest $entity)
 * @method null|AddOrderShippingRequest getBody()
 */
class AddOrderShipping extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return AddOrderShippingRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return AddOrderShippingResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/shipping';
    }
}

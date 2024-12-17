<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingRequest\AddOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/addordershipping
 *
 * @method AddOrderShipping setBody(null|array|AddOrderShippingRequest $entity)
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

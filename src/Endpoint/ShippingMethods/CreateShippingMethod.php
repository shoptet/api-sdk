<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodResponse\CreateShippingMethodResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-methods/createshippingmethod
 *
 * @method CreateShippingMethod setBody(null|array<string, mixed>|CreateShippingMethodRequest $entity)
 * @method null|CreateShippingMethodRequest getBody()
 */
class CreateShippingMethod extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateShippingMethodRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateShippingMethodResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-methods';
    }
}

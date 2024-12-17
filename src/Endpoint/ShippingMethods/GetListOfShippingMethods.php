<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethodsResponse\GetListOfShippingMethodsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Shipping-methods/getlistofshippingmethods
 *
 * @method GetListOfShippingMethods setBody(null $entity)
 * @method null getBody()
 */
class GetListOfShippingMethods extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfShippingMethodsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-methods';
    }
}

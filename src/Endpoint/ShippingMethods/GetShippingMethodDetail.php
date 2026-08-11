<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetShippingMethodDetailResponse\GetShippingMethodDetailResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-methods/getshippingmethoddetail
 *
 * @method GetShippingMethodDetail setBody(null $entity)
 * @method null getBody()
 */
class GetShippingMethodDetail extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetShippingMethodDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-methods/{guid}';
    }
}

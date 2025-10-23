<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/getlistofproductsavailabilities
 *
 * @method GetListOfProductsAvailabilities setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductsAvailabilities extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductsAvailabilitiesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/availabilities';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductUnitsResponse\GetListOfProductUnitsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductunits
 *
 * @method GetListOfProductUnits setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductUnits extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductUnitsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/units';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\MeasureUnits;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\MeasureUnits\GetListOfProductsMeasureUnitsResponse\GetListOfProductsMeasureUnitsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Measure-units/getlistofproductsmeasureunits
 *
 * @method GetListOfProductsMeasureUnits setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductsMeasureUnits extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductsMeasureUnitsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/measure-units';
    }
}

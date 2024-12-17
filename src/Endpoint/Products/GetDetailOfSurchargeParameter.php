<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfSurchargeParameterResponse\GetDetailOfSurchargeParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getdetailofsurchargeparameter
 *
 * @method GetDetailOfSurchargeParameter setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfSurchargeParameter extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfSurchargeParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters/{code}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfVariantParameterResponse\GetDetailOfVariantParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getdetailofvariantparameter
 *
 * @method GetDetailOfVariantParameter setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfVariantParameter extends Get
{
    protected array $supportedPathParams = ['paramIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfVariantParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters/{paramIndex}';
    }
}

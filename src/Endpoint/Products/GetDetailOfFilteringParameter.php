<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfFilteringParameterResponse\GetDetailOfFilteringParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getdetailoffilteringparameter
 *
 * @method GetDetailOfFilteringParameter setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfFilteringParameter extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfFilteringParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}';
    }
}

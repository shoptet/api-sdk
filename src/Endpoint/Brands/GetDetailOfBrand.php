<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands;

use Shoptet\Api\Sdk\Php\Endpoint\Brands\GetDetailOfBrandResponse\GetDetailOfBrandResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Brands/getdetailofbrand
 *
 * @method GetDetailOfBrand setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfBrand extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfBrandResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/brands/{code}';
    }
}

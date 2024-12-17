<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetailByCodeResponse\GetProductDetailByCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getproductdetailbycode
 *
 * @method GetProductDetailByCode setBody(null $entity)
 * @method null getBody()
 */
class GetProductDetailByCode extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProductDetailByCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/code/{code}';
    }
}

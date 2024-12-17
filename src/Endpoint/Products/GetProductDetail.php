<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetailResponse\GetProductDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getproductdetail
 *
 * @method GetProductDetail setBody(null $entity)
 * @method null getBody()
 */
class GetProductDetail extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProductDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}';
    }
}

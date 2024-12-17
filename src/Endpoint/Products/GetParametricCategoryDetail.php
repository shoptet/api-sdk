<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetParametricCategoryDetailResponse\GetParametricCategoryDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getparametriccategorydetail
 *
 * @method GetParametricCategoryDetail setBody(null $entity)
 * @method null getBody()
 */
class GetParametricCategoryDetail extends Get
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetParametricCategoryDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories/{categoryGuid}';
    }
}

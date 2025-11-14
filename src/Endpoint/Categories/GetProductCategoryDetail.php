<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetProductCategoryDetailResponse\GetProductCategoryDetailResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getproductcategorydetail
 *
 * @method GetProductCategoryDetail setBody(null $entity)
 * @method null getBody()
 */
class GetProductCategoryDetail extends Get
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProductCategoryDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}';
    }
}

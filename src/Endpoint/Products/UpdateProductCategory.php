<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryRequest\UpdateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryResponse\UpdateProductCategoryResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproductcategory
 *
 * @method UpdateProductCategory setBody(null|array|UpdateProductCategoryRequest $entity)
 * @method null|UpdateProductCategoryRequest getBody()
 */
class UpdateProductCategory extends Patch
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductOrderInCategoryResponse\UpdateProductOrderInCategoryResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproductorderincategory
 *
 * @method UpdateProductOrderInCategory setBody(null|array|UpdateProductOrderInCategoryRequest $entity)
 * @method null|UpdateProductOrderInCategoryRequest getBody()
 */
class UpdateProductOrderInCategory extends Patch
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductOrderInCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductOrderInCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}/productsPriority';
    }
}

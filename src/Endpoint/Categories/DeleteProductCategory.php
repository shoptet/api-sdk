<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\DeleteProductCategoryResponse\DeleteProductCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/deleteproductcategory
 *
 * @method DeleteProductCategory setBody(null $entity)
 * @method null getBody()
 */
class DeleteProductCategory extends Delete
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false, 'deleteUsed' => false, 'deleteChildren' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteProductCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}';
    }
}

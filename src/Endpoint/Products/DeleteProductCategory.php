<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductCategoryResponse\DeleteProductCategoryResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deleteproductcategory
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

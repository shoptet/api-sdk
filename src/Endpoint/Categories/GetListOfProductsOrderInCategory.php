<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetListOfProductsOrderInCategoryResponse\GetListOfProductsOrderInCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getlistofproductsorderincategory
 *
 * @method GetListOfProductsOrderInCategory setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductsOrderInCategory extends PageableGet
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductsOrderInCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}/productsPriority';
    }
}

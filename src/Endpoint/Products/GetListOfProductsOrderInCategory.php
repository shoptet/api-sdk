<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategoryResponse\GetListOfProductsOrderInCategoryResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsorderincategory
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

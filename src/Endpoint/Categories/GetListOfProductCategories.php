<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetListOfProductCategoriesResponse\GetListOfProductCategoriesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getlistofproductcategories
 *
 * @method GetListOfProductCategories setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductCategories extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductCategoriesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductCategoriesResponse\GetListOfProductCategoriesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductcategories
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

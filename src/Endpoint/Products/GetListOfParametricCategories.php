<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategoriesResponse\GetListOfParametricCategoriesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofparametriccategories
 *
 * @method GetListOfParametricCategories setBody(null $entity)
 * @method null getBody()
 */
class GetListOfParametricCategories extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'include' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfParametricCategoriesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories';
    }
}

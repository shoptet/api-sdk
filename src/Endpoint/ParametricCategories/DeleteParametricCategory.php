<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\DeleteParametricCategoryResponse\DeleteParametricCategoryResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/deleteparametriccategory
 *
 * @method DeleteParametricCategory setBody(null $entity)
 * @method null getBody()
 */
class DeleteParametricCategory extends Delete
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteParametricCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories/{categoryGuid}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories;

use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\UpdateParametricCategoryRequest\UpdateParametricCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\UpdateParametricCategoryResponse\UpdateParametricCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/updateparametriccategory
 *
 * @method UpdateParametricCategory setBody(null|array|UpdateParametricCategoryRequest $entity)
 * @method null|UpdateParametricCategoryRequest getBody()
 */
class UpdateParametricCategory extends Patch
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateParametricCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateParametricCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories/{categoryGuid}';
    }
}

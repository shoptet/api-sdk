<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\GetParametricCategoryAvailableParametersResponse\GetParametricCategoryAvailableParametersResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/getparametriccategoryavailableparameters
 *
 * @method GetParametricCategoryAvailableParameters setBody(null $entity)
 * @method null getBody()
 */
class GetParametricCategoryAvailableParameters extends Get
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetParametricCategoryAvailableParametersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories-available-parameters/{categoryGuid}';
    }
}

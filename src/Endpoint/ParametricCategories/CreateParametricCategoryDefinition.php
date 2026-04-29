<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories;

use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryDefinitionRequest\CreateParametricCategoryDefinitionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryDefinitionResponse\CreateParametricCategoryDefinitionResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/createparametriccategorydefinition
 *
 * @method CreateParametricCategoryDefinition setBody(null|array<string, mixed>|CreateParametricCategoryDefinitionRequest $entity)
 * @method null|CreateParametricCategoryDefinitionRequest getBody()
 */
class CreateParametricCategoryDefinition extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateParametricCategoryDefinitionRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateParametricCategoryDefinitionResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories-definition';
    }
}

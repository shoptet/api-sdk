<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterValueRequest\CreateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterValueResponse\CreateFilteringParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createfilteringparametervalue
 *
 * @method CreateFilteringParameterValue setBody(null|array|CreateFilteringParameterValueRequest $entity)
 * @method null|CreateFilteringParameterValueRequest getBody()
 */
class CreateFilteringParameterValue extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateFilteringParameterValueRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateFilteringParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}';
    }
}

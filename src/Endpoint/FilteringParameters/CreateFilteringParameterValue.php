<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterValueRequest\CreateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterValueResponse\CreateFilteringParameterValueResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/createfilteringparametervalue
 *
 * @method CreateFilteringParameterValue setBody(null|array<string, mixed>|CreateFilteringParameterValueRequest $entity)
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterRequest\CreateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterResponse\CreateFilteringParameterResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/createfilteringparameter
 *
 * @method CreateFilteringParameter setBody(null|array<string, mixed>|CreateFilteringParameterRequest $entity)
 * @method null|CreateFilteringParameterRequest getBody()
 */
class CreateFilteringParameter extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateFilteringParameterRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateFilteringParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters';
    }
}

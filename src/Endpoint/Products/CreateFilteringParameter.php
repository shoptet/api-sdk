<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterRequest\CreateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterResponse\CreateFilteringParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createfilteringparameter
 *
 * @method CreateFilteringParameter setBody(null|array|CreateFilteringParameterRequest $entity)
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

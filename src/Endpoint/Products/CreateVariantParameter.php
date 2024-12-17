<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterRequest\CreateVariantParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterResponse\CreateVariantParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createvariantparameter
 *
 * @method CreateVariantParameter setBody(null|array|CreateVariantParameterRequest $entity)
 * @method null|CreateVariantParameterRequest getBody()
 */
class CreateVariantParameter extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateVariantParameterRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateVariantParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters';
    }
}

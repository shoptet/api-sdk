<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterValueRequest\CreateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterValueResponse\CreateVariantParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createvariantparametervalue
 *
 * @method CreateVariantParameterValue setBody(null|array|CreateVariantParameterValueRequest $entity)
 * @method null|CreateVariantParameterValueRequest getBody()
 */
class CreateVariantParameterValue extends Post
{
    protected array $supportedPathParams = ['paramIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateVariantParameterValueRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateVariantParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters/{paramIndex}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VariantParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\CreateVariantParameterValueRequest\CreateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\CreateVariantParameterValueResponse\CreateVariantParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/createvariantparametervalue
 *
 * @method CreateVariantParameterValue setBody(null|array<string, mixed>|CreateVariantParameterValueRequest $entity)
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

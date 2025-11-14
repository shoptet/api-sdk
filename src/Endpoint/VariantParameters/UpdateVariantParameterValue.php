<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VariantParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterValueRequest\UpdateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterValueResponse\UpdateVariantParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/updatevariantparametervalue
 *
 * @method UpdateVariantParameterValue setBody(null|array|UpdateVariantParameterValueRequest $entity)
 * @method null|UpdateVariantParameterValueRequest getBody()
 */
class UpdateVariantParameterValue extends Patch
{
    protected array $supportedPathParams = ['paramIndex' => true, 'rawValue' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateVariantParameterValueRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateVariantParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters/{paramIndex}/{rawValue}';
    }
}

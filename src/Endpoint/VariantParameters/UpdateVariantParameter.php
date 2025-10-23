<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VariantParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterRequest\UpdateVariantParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterResponse\UpdateVariantParameterResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/updatevariantparameter
 *
 * @method UpdateVariantParameter setBody(null|array|UpdateVariantParameterRequest $entity)
 * @method null|UpdateVariantParameterRequest getBody()
 */
class UpdateVariantParameter extends Patch
{
    protected array $supportedPathParams = ['paramIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateVariantParameterRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateVariantParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters/{paramIndex}';
    }
}

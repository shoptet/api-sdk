<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VariantParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\DeleteVariantParameterResponse\DeleteVariantParameterResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/deletevariantparameter
 *
 * @method DeleteVariantParameter setBody(null $entity)
 * @method null getBody()
 */
class DeleteVariantParameter extends Delete
{
    protected array $supportedPathParams = ['paramIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteVariantParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters/{paramIndex}';
    }
}

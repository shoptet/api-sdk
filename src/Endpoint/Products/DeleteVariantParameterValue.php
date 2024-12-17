<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteVariantParameterValueResponse\DeleteVariantParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deletevariantparametervalue
 *
 * @method DeleteVariantParameterValue setBody(null $entity)
 * @method null getBody()
 */
class DeleteVariantParameterValue extends Delete
{
    protected array $supportedPathParams = ['paramIndex' => true, 'rawValue' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteVariantParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters/{paramIndex}/{rawValue}';
    }
}

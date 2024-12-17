<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterValueRequest\UpdateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterValueResponse\UpdateFilteringParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updatefilteringparametervalue
 *
 * @method UpdateFilteringParameterValue setBody(null|array|UpdateFilteringParameterValueRequest $entity)
 * @method null|UpdateFilteringParameterValueRequest getBody()
 */
class UpdateFilteringParameterValue extends Patch
{
    protected array $supportedPathParams = ['code' => true, 'valueIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateFilteringParameterValueRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateFilteringParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}/{valueIndex}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\DeleteFilteringParameterValueResponse\DeleteFilteringParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/deletefilteringparametervalue
 *
 * @method DeleteFilteringParameterValue setBody(null $entity)
 * @method null getBody()
 */
class DeleteFilteringParameterValue extends Delete
{
    protected array $supportedPathParams = ['code' => true, 'valueIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteFilteringParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}/{valueIndex}';
    }
}

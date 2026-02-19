<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterValueRequest\UpdateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterValueResponse\UpdateFilteringParameterValueResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/updatefilteringparametervalue
 *
 * @method UpdateFilteringParameterValue setBody(null|array<string, mixed>|UpdateFilteringParameterValueRequest $entity)
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

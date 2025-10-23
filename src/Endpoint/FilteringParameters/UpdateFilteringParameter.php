<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterRequest\UpdateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterResponse\UpdateFilteringParameterResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/updatefilteringparameter
 *
 * @method UpdateFilteringParameter setBody(null|array|UpdateFilteringParameterRequest $entity)
 * @method null|UpdateFilteringParameterRequest getBody()
 */
class UpdateFilteringParameter extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateFilteringParameterRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateFilteringParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}';
    }
}

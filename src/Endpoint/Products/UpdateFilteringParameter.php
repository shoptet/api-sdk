<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterRequest\UpdateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterResponse\UpdateFilteringParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updatefilteringparameter
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

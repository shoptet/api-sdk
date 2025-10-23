<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\GetListOfFilteringParametersResponse\GetListOfFilteringParametersResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/getlistoffilteringparameters
 *
 * @method GetListOfFilteringParameters setBody(null $entity)
 * @method null getBody()
 */
class GetListOfFilteringParameters extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfFilteringParametersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters';
    }
}

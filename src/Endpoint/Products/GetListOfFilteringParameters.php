<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfFilteringParametersResponse\GetListOfFilteringParametersResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistoffilteringparameters
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

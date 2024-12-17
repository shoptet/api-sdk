<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfVariantParametersResponse\GetListOfVariantParametersResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofvariantparameters
 *
 * @method GetListOfVariantParameters setBody(null $entity)
 * @method null getBody()
 */
class GetListOfVariantParameters extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'include' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfVariantParametersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/variant-parameters';
    }
}

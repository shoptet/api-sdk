<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfSurchargeParametersResponse\GetListOfSurchargeParametersResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofsurchargeparameters
 *
 * @method GetListOfSurchargeParameters setBody(null $entity)
 * @method null getBody()
 */
class GetListOfSurchargeParameters extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfSurchargeParametersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters';
    }
}

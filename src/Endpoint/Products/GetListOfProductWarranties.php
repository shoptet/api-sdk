<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductwarranties
 *
 * @method GetListOfProductWarranties setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductWarranties extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductWarrantiesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/warranties';
    }
}

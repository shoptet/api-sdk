<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Warranties;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Warranties\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Warranties/getlistofproductwarranties
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

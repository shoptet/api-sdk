<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands;

use Shoptet\Api\Sdk\Php\Endpoint\Brands\GetListofBrandsResponse\GetListofBrandsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Brands/getlistofbrands
 *
 * @method GetListofBrands setBody(null $entity)
 * @method null getBody()
 */
class GetListofBrands extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListofBrandsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/brands';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetLastProductChangesResponse\GetLastProductChangesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlastproductchanges
 *
 * @method GetLastProductChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastProductChanges extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastProductChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/changes';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Suppliers;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetListOfSuppliersResponse\GetListOfSuppliersResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Suppliers/getlistofsuppliers
 *
 * @method GetListOfSuppliers setBody(null $entity)
 * @method null getBody()
 */
class GetListOfSuppliers extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfSuppliersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/suppliers';
    }
}

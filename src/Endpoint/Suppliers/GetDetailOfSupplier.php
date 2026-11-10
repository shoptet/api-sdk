<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Suppliers;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetDetailOfSupplierResponse\GetDetailOfSupplierResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Suppliers/getdetailofsupplier
 *
 * @method GetDetailOfSupplier setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfSupplier extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfSupplierResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/suppliers/{guid}';
    }
}

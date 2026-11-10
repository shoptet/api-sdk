<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Suppliers;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Suppliers\CreateSupplierRequest\CreateSupplierRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Suppliers\CreateSupplierResponse\CreateSupplierResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Suppliers/createsupplier
 *
 * @method CreateSupplier setBody(null|array<string, mixed>|CreateSupplierRequest $entity)
 * @method null|CreateSupplierRequest getBody()
 */
class CreateSupplier extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateSupplierRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateSupplierResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/suppliers';
    }
}

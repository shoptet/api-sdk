<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductFlagResponse\DeleteProductFlagResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deleteproductflag
 *
 * @method DeleteProductFlag setBody(null $entity)
 * @method null getBody()
 */
class DeleteProductFlag extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteProductFlagResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/flags/{code}';
    }
}

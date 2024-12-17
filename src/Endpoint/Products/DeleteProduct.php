<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductResponse\DeleteProductResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deleteproduct
 *
 * @method DeleteProduct setBody(null $entity)
 * @method null getBody()
 */
class DeleteProduct extends Delete
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}';
    }
}

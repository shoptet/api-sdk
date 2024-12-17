<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductVariantResponse\DeleteProductVariantResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deleteproductvariant
 *
 * @method DeleteProductVariant setBody(null $entity)
 * @method null getBody()
 */
class DeleteProductVariant extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteProductVariantResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/code/{code}';
    }
}

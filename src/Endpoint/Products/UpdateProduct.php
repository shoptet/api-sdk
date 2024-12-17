<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductRequest\UpdateProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductResponse\UpdateProductResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproduct
 *
 * @method UpdateProduct setBody(null|array|UpdateProductRequest $entity)
 * @method null|UpdateProductRequest getBody()
 */
class UpdateProduct extends Patch
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}';
    }
}

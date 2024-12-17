<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlagRequest\UpdateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlagResponse\UpdateProductFlagResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproductflag
 *
 * @method UpdateProductFlag setBody(null|array|UpdateProductFlagRequest $entity)
 * @method null|UpdateProductFlagRequest getBody()
 */
class UpdateProductFlag extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductFlagRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductFlagResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/flags/{code}';
    }
}

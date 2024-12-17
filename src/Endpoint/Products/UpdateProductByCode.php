<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeResponse\UpdateProductByCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproductbycode
 *
 * @method UpdateProductByCode setBody(null|array|UpdateProductByCodeRequest $entity)
 * @method null|UpdateProductByCodeRequest getBody()
 */
class UpdateProductByCode extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductByCodeRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductByCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/code/{code}';
    }
}

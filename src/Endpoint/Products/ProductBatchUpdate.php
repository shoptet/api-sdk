<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdateRequest\ProductBatchUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdateResponse\ProductBatchUpdateResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/productbatchupdate
 *
 * @method ProductBatchUpdate setBody(null|array|ProductBatchUpdateRequest $entity)
 * @method null|ProductBatchUpdateRequest getBody()
 */
class ProductBatchUpdate extends Patch
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return ProductBatchUpdateRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return ProductBatchUpdateResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/batch';
    }
}

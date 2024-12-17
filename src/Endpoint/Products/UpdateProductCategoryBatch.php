<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryBatchRequest\UpdateProductCategoryBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryBatchResponse\UpdateProductCategoryBatchResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproductcategorybatch
 *
 * @method UpdateProductCategoryBatch setBody(null|array|UpdateProductCategoryBatchRequest $entity)
 * @method null|UpdateProductCategoryBatchRequest getBody()
 */
class UpdateProductCategoryBatch extends Patch
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductCategoryBatchRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductCategoryBatchResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/batch';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UnlinkAllProductRelatedFilesResponse\UnlinkAllProductRelatedFilesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/unlinkallproductrelatedfiles
 *
 * @method UnlinkAllProductRelatedFiles setBody(null $entity)
 * @method null getBody()
 */
class UnlinkAllProductRelatedFiles extends Delete
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return UnlinkAllProductRelatedFilesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/related-files';
    }
}

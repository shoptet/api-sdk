<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductRelatedFiles;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ProductRelatedFiles\DeleteOneProductRelatedFileResponse\DeleteOneProductRelatedFileResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-related-files/deleteoneproductrelatedfile
 *
 * @method DeleteOneProductRelatedFile setBody(null $entity)
 * @method null getBody()
 */
class DeleteOneProductRelatedFile extends Delete
{
    protected array $supportedPathParams = ['guid' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOneProductRelatedFileResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/related-files/{id}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateRelatedFileLinkRequest\CreateRelatedFileLinkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateRelatedFileLinkResponse\CreateRelatedFileLinkResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createrelatedfilelink
 *
 * @method CreateRelatedFileLink setBody(null|array|CreateRelatedFileLinkRequest $entity)
 * @method null|CreateRelatedFileLinkRequest getBody()
 */
class CreateRelatedFileLink extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateRelatedFileLinkRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateRelatedFileLinkResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/related-files';
    }
}

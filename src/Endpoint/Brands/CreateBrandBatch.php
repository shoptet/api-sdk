<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands;

use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandBatchRequest\CreateBrandBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandBatchResponse\CreateBrandBatchResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Brands/createbrandbatch
 *
 * @method CreateBrandBatch setBody(null|array|CreateBrandBatchRequest $entity)
 * @method null|CreateBrandBatchRequest getBody()
 */
class CreateBrandBatch extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateBrandBatchRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateBrandBatchResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/brands/batch';
    }
}

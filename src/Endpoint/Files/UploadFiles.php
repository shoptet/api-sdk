<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files;

use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFilesRequest\UploadFilesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFilesResponse\UploadFilesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Files/uploadfiles
 *
 * @method UploadFiles setBody(null|array|UploadFilesRequest $entity)
 * @method null|UploadFilesRequest getBody()
 */
class UploadFiles extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UploadFilesRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UploadFilesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/system/files';
    }
}

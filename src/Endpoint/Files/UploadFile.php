<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files;

use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileRequest\UploadFileRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileResponse\UploadFileResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Files/uploadfile
 *
 * @method UploadFile setBody(null|array|UploadFileRequest $entity)
 * @method null|UploadFileRequest getBody()
 */
class UploadFile extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UploadFileRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UploadFileResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/system/file';
    }
}

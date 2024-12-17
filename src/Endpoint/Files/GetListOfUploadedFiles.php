<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files;

use Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFilesResponse\GetListOfUploadedFilesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Files/getlistofuploadedfiles
 *
 * @method GetListOfUploadedFiles setBody(null $entity)
 * @method null getBody()
 */
class GetListOfUploadedFiles extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfUploadedFilesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/system/files';
    }
}

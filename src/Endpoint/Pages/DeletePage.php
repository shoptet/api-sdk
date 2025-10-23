<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\DeletePageResponse\DeletePageResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/deletepage
 *
 * @method DeletePage setBody(null $entity)
 * @method null getBody()
 */
class DeletePage extends Delete
{
    protected array $supportedPathParams = ['pageId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeletePageResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pages/{pageId}';
    }
}

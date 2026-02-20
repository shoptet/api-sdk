<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages;

use Shoptet\Api\Sdk\Php\Endpoint\Pages\UpdatePageRequest\UpdatePageRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\UpdatePageResponse\UpdatePageResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/updatepage
 *
 * @method UpdatePage setBody(null|array<string, mixed>|UpdatePageRequest $entity)
 * @method null|UpdatePageRequest getBody()
 */
class UpdatePage extends Patch
{
    protected array $supportedPathParams = ['pageId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePageRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePageResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pages/{pageId}';
    }
}

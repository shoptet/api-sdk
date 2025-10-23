<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages;

use Shoptet\Api\Sdk\Php\Endpoint\Pages\CreatePageRequest\CreatePageRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\CreatePageResponse\CreatePageResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/createpage
 *
 * @method CreatePage setBody(null|array|CreatePageRequest $entity)
 * @method null|CreatePageRequest getBody()
 */
class CreatePage extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreatePageRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreatePageResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pages';
    }
}

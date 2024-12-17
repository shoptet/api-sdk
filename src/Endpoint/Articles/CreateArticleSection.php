<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleSectionRequest\CreateArticleSectionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleSectionResponse\CreateArticleSectionResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/createarticlesection
 *
 * @method CreateArticleSection setBody(null|array|CreateArticleSectionRequest $entity)
 * @method null|CreateArticleSectionRequest getBody()
 */
class CreateArticleSection extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateArticleSectionRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateArticleSectionResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/sections';
    }
}

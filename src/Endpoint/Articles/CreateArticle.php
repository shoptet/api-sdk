<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleRequest\CreateArticleRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleResponse\CreateArticleResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/createarticle
 *
 * @method CreateArticle setBody(null|array|CreateArticleRequest $entity)
 * @method null|CreateArticleRequest getBody()
 */
class CreateArticle extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateArticleRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateArticleResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles';
    }
}

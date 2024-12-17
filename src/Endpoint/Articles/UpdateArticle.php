<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleRequest\UpdateArticleRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleResponse\UpdateArticleResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/updatearticle
 *
 * @method UpdateArticle setBody(null|array|UpdateArticleRequest $entity)
 * @method null|UpdateArticleRequest getBody()
 */
class UpdateArticle extends Patch
{
    protected array $supportedPathParams = ['articleId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateArticleRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateArticleResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/{articleId}';
    }
}

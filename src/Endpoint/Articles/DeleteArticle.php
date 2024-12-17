<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\DeleteArticleResponse\DeleteArticleResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/deletearticle
 *
 * @method DeleteArticle setBody(null $entity)
 * @method null getBody()
 */
class DeleteArticle extends Delete
{
    protected array $supportedPathParams = ['articleId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteArticleResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/{articleId}';
    }
}

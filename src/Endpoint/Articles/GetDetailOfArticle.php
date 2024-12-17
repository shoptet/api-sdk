<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetDetailOfArticleResponse\GetDetailOfArticleResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/getdetailofarticle
 *
 * @method GetDetailOfArticle setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfArticle extends Get
{
    protected array $supportedPathParams = ['articleId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfArticleResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/{articleId}';
    }
}

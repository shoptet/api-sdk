<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetDetailOfArticleSectionResponse\GetDetailOfArticleSectionResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/getdetailofarticlesection
 *
 * @method GetDetailOfArticleSection setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfArticleSection extends Get
{
    protected array $supportedPathParams = ['articleSectionId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfArticleSectionResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/sections/{articleSectionId}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleSectionRequest\UpdateArticleSectionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleSectionResponse\UpdateArticleSectionResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/updatearticlesection
 *
 * @method UpdateArticleSection setBody(null|array|UpdateArticleSectionRequest $entity)
 * @method null|UpdateArticleSectionRequest getBody()
 */
class UpdateArticleSection extends Patch
{
    protected array $supportedPathParams = ['articleSectionId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateArticleSectionRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateArticleSectionResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/sections/{articleSectionId}';
    }
}

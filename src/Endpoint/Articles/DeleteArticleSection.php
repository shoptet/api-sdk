<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\DeleteArticleSectionResponse\DeleteArticleSectionResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/deletearticlesection
 *
 * @method DeleteArticleSection setBody(null $entity)
 * @method null getBody()
 */
class DeleteArticleSection extends Delete
{
    protected array $supportedPathParams = ['articleSectionId' => true];
    protected array $supportedQueryParams = ['language' => false, 'force' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteArticleSectionResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/sections/{articleSectionId}';
    }
}

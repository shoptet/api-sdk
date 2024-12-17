<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticlesResponse\GetListOfArticlesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/getlistofarticles
 *
 * @method GetListOfArticles setBody(null $entity)
 * @method null getBody()
 */
class GetListOfArticles extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfArticlesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles';
    }
}

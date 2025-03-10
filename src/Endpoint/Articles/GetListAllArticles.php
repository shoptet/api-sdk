<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\Article;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListAllArticlesResponse\GetListAllArticlesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/getlistallarticles
 *
 * @method GetListAllArticles setBody(null $entity)
 * @method null getBody()
 */
class GetListAllArticles extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'idFrom' => false,
        'idTo' => false,
        'articleLanguage' => false,
        'publishDateFrom' => false,
        'publishDateTo' => false,
        'changeDateFrom' => false,
        'changeDateTo' => false,
        'visible' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListAllArticlesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return Article::class;
    }
}

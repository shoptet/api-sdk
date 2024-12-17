<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles;

use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticleSectionsResponse\GetListOfArticleSectionsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Articles/getlistofarticlesections
 *
 * @method GetListOfArticleSections setBody(null $entity)
 * @method null getBody()
 */
class GetListOfArticleSections extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfArticleSectionsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/articles/sections';
    }
}

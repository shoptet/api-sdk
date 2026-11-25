<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\CategorySnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetListOfAllCategoriesResponse\GetListOfAllCategoriesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getlistofallcategories
 *
 * @method GetListOfAllCategories setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllCategories extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllCategoriesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return CategorySnapshot::class;
    }
}

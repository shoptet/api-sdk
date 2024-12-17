<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfRecyclingFeeCategoriesResponse\GetListOfRecyclingFeeCategoriesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofrecyclingfeecategories
 *
 * @method GetListOfRecyclingFeeCategories setBody(null $entity)
 * @method null getBody()
 */
class GetListOfRecyclingFeeCategories extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfRecyclingFeeCategoriesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/recycling-fee-categories';
    }
}

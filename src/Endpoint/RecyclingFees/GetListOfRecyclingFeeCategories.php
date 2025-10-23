<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\RecyclingFees;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\RecyclingFees\GetListOfRecyclingFeeCategoriesResponse\GetListOfRecyclingFeeCategoriesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Recycling-fees/getlistofrecyclingfeecategories
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

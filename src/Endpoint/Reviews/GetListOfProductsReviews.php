<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProductsReviewsResponse\GetListOfProductsReviewsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofproductsreviews
 *
 * @method GetListOfProductsReviews setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductsReviews extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'dateFrom' => false,
        'dateTo' => false,
        'changeTimeFrom' => false,
        'productGuid' => false,
        'orderCode' => true,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductsReviewsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/products';
    }
}

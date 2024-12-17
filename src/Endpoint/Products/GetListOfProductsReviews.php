<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsReviewsResponse\GetListOfProductsReviewsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsreviews
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
        'dateFrom' => true,
        'dateTo' => true,
        'changeTimeFrom' => true,
        'productGuid' => true,
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
        return '/api/products/reviews';
    }
}

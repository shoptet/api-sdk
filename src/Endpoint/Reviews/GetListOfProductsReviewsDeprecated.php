<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProductsReviewsDeprecatedResponse\GetListOfProductsReviewsDeprecatedResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofproductsreviewsdeprecated
 *
 * @method GetListOfProductsReviewsDeprecated setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductsReviewsDeprecated extends PageableGet
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
        return GetListOfProductsReviewsDeprecatedResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/reviews';
    }
}

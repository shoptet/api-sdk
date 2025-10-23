<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfEshopReviewsResponse\GetListOfEshopReviewsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofeshopreviews
 *
 * @method GetListOfEshopReviews setBody(null $entity)
 * @method null getBody()
 */
class GetListOfEshopReviews extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfEshopReviewsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop/reviews';
    }
}

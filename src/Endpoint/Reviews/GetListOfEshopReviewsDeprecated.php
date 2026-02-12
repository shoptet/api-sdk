<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfEshopReviewsDeprecatedResponse\GetListOfEshopReviewsDeprecatedResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofeshopreviewsdeprecated
 *
 * @method GetListOfEshopReviewsDeprecated setBody(null $entity)
 * @method null getBody()
 */
class GetListOfEshopReviewsDeprecated extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfEshopReviewsDeprecatedResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop/reviews';
    }
}

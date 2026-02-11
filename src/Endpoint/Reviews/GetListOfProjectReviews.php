<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProjectReviewsResponse\GetListOfProjectReviewsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofprojectreviews
 *
 * @method GetListOfProjectReviews setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProjectReviews extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProjectReviewsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/project';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\ReviewProjectSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfAllProjectReviewsResponse\GetListOfAllProjectReviewsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofallprojectreviews
 *
 * @method GetListOfAllProjectReviews setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllProjectReviews extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'dateFrom' => false,
        'dateTo' => false,
        'visible' => false,
        'orderCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllProjectReviewsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/project/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return ReviewProjectSnapshot::class;
    }
}

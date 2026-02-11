<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProjectReviewRequest\CreateProjectReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProjectReviewResponse\CreateProjectReviewResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/createprojectreview
 *
 * @method CreateProjectReview setBody(null|array|CreateProjectReviewRequest $entity)
 * @method null|CreateProjectReviewRequest getBody()
 */
class CreateProjectReview extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProjectReviewRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProjectReviewResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/project';
    }
}

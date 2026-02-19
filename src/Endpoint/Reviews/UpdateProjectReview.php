<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProjectReviewRequest\UpdateProjectReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProjectReviewResponse\UpdateProjectReviewResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/updateprojectreview
 *
 * @method UpdateProjectReview setBody(null|array<string, mixed>|UpdateProjectReviewRequest $entity)
 * @method null|UpdateProjectReviewRequest getBody()
 */
class UpdateProjectReview extends Patch
{
    protected array $supportedPathParams = ['reviewId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProjectReviewRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProjectReviewResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/project/{reviewId}';
    }
}

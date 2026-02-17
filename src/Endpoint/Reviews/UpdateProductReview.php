<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProductReviewRequest\UpdateProductReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProductReviewResponse\UpdateProductReviewResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/updateproductreview
 *
 * @method UpdateProductReview setBody(null|array|UpdateProductReviewRequest $entity)
 * @method null|UpdateProductReviewRequest getBody()
 */
class UpdateProductReview extends Patch
{
    protected array $supportedPathParams = ['reviewId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductReviewRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductReviewResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/products/{reviewId}';
    }
}

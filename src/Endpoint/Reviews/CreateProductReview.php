<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProductReviewRequest\CreateProductReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProductReviewResponse\CreateProductReviewResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/createproductreview
 *
 * @method CreateProductReview setBody(null|array|CreateProductReviewRequest $entity)
 * @method null|CreateProductReviewRequest getBody()
 */
class CreateProductReview extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductReviewRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductReviewResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/products';
    }
}

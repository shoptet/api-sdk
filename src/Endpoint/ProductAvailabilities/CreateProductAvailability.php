<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\CreateProductAvailabilityRequest\CreateProductAvailabilityRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\CreateProductAvailabilityResponse\CreateProductAvailabilityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/createproductavailability
 *
 * @method CreateProductAvailability setBody(null|array<string, mixed>|CreateProductAvailabilityRequest $entity)
 * @method null|CreateProductAvailabilityRequest getBody()
 */
class CreateProductAvailability extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductAvailabilityRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductAvailabilityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/availabilities';
    }
}

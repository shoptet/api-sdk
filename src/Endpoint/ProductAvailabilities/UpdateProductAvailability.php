<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\UpdateProductAvailabilityRequest\UpdateProductAvailabilityRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\UpdateProductAvailabilityResponse\UpdateProductAvailabilityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/updateproductavailability
 *
 * @method UpdateProductAvailability setBody(null|array<string, mixed>|UpdateProductAvailabilityRequest $entity)
 * @method null|UpdateProductAvailabilityRequest getBody()
 */
class UpdateProductAvailability extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductAvailabilityRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductAvailabilityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/availabilities/{id}';
    }
}

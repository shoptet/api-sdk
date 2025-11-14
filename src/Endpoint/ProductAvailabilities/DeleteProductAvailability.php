<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\DeleteProductAvailabilityResponse\DeleteProductAvailabilityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/deleteproductavailability
 *
 * @method DeleteProductAvailability setBody(null $entity)
 * @method null getBody()
 */
class DeleteProductAvailability extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteProductAvailabilityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/availabilities/{id}';
    }
}

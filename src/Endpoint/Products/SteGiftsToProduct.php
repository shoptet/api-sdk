<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Products\SteGiftsToProductRequest\SteGiftsToProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SteGiftsToProductResponse\SteGiftsToProductResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/stegiftstoproduct
 *
 * @method SteGiftsToProduct setBody(null|array|SteGiftsToProductRequest $entity)
 * @method null|SteGiftsToProductRequest getBody()
 */
class SteGiftsToProduct extends Put
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return SteGiftsToProductRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return SteGiftsToProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/gifts';
    }
}

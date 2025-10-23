<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductGifts;

use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SteGiftsToProductRequest\SteGiftsToProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SteGiftsToProductResponse\SteGiftsToProductResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-gifts/stegiftstoproduct
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

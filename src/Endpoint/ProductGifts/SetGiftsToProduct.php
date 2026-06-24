<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductGifts;

use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SetGiftsToProductRequest\SetGiftsToProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SetGiftsToProductResponse\SetGiftsToProductResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-gifts/setgiftstoproduct
 *
 * @method SetGiftsToProduct setBody(null|array<string, mixed>|SetGiftsToProductRequest $entity)
 * @method null|SetGiftsToProductRequest getBody()
 */
class SetGiftsToProduct extends Put
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return SetGiftsToProductRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return SetGiftsToProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/gifts';
    }
}

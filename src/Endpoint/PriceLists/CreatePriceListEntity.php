<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePriceListEntityRequest\CreatePriceListEntityRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePriceListEntityResponse\CreatePriceListEntityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/createpricelistentity
 *
 * @method CreatePriceListEntity setBody(null|array<string, mixed>|CreatePriceListEntityRequest $entity)
 * @method null|CreatePriceListEntityRequest getBody()
 */
class CreatePriceListEntity extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreatePriceListEntityRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreatePriceListEntityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists';
    }
}

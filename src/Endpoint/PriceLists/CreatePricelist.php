<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistRequest\CreatePricelistRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistResponse\CreatePricelistResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Price-lists/createpricelist
 *
 * @method CreatePricelist setBody(null|array|CreatePricelistRequest $entity)
 * @method null|CreatePricelistRequest getBody()
 */
class CreatePricelist extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreatePricelistRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreatePricelistResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists';
    }
}

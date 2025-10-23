<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductSets;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\AddItemToProductSetRequest\AddItemToProductSetRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\AddItemToProductSetResponse\AddItemToProductSetResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-sets/additemtoproductset
 *
 * @method AddItemToProductSet setBody(null|array|AddItemToProductSetRequest $entity)
 * @method null|AddItemToProductSetRequest getBody()
 */
class AddItemToProductSet extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return AddItemToProductSetRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return AddItemToProductSetResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/set';
    }
}

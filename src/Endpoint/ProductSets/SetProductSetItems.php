<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductSets;

use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\SetProductSetItemsRequest\SetProductSetItemsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\SetProductSetItemsResponse\SetProductSetItemsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-sets/setproductsetitems
 *
 * @method SetProductSetItems setBody(null|array<string, mixed>|SetProductSetItemsRequest $entity)
 * @method null|SetProductSetItemsRequest getBody()
 */
class SetProductSetItems extends Put
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return SetProductSetItemsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return SetProductSetItemsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/set';
    }
}

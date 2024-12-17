<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Products\SetProductSetItemsRequest\SetProductSetItemsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetProductSetItemsResponse\SetProductSetItemsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/setproductsetitems
 *
 * @method SetProductSetItems setBody(null|array|SetProductSetItemsRequest $entity)
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

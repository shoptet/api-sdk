<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistResponse\UpdatePricelistResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Price-lists/updatepricelist
 *
 * @method UpdatePricelist setBody(null|array|UpdatePricelistRequest $entity)
 * @method null|UpdatePricelistRequest getBody()
 */
class UpdatePricelist extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePricelistRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePricelistResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists/{id}';
    }
}

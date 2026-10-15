<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePriceListEntityRequest\UpdatePriceListEntityRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePriceListEntityResponse\UpdatePriceListEntityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/updatepricelistentity
 *
 * @method UpdatePriceListEntity setBody(null|array<string, mixed>|UpdatePriceListEntityRequest $entity)
 * @method null|UpdatePriceListEntityRequest getBody()
 */
class UpdatePriceListEntity extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePriceListEntityRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePriceListEntityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}';
    }
}

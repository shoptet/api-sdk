<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\DeletePriceListEntityResponse\DeletePriceListEntityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/deletepricelistentity
 *
 * @method DeletePriceListEntity setBody(null $entity)
 * @method null getBody()
 */
class DeletePriceListEntity extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeletePriceListEntityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}';
    }
}

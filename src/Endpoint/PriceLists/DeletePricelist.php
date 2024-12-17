<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\DeletePricelistResponse\DeletePricelistResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Price-lists/deletepricelist
 *
 * @method DeletePricelist setBody(null $entity)
 * @method null getBody()
 */
class DeletePricelist extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeletePricelistResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists/{id}';
    }
}

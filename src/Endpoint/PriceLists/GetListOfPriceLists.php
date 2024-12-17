<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfPriceListsResponse\GetListOfPriceListsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Price-lists/getlistofpricelists
 *
 * @method GetListOfPriceLists setBody(null $entity)
 * @method null getBody()
 */
class GetListOfPriceLists extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfPriceListsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists';
    }
}

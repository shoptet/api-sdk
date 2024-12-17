<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetailResponse\GetPricelistDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Price-lists/getpricelistdetail
 *
 * @method GetPricelistDetail setBody(null $entity)
 * @method null getBody()
 */
class GetPricelistDetail extends PageableGet
{
    protected array $supportedPathParams = ['id' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'code' => false,
        'guid' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetPricelistDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists/{id}';
    }
}

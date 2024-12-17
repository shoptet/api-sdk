<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfAllPricelistDetailsResponse\GetListOfAllPricelistDetailsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Price-lists/getlistofallpricelistdetails
 *
 * @method GetListOfAllPricelistDetails setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllPricelistDetails extends Get
{
    protected array $supportedPathParams = ['id' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'actionPriceDateFrom' => false,
        'actionPriceDateTo' => false,
        'vatRate' => false,
        'currencyCode' => false,
        'orderableMinAmount' => false,
        'orderableMinAmountFrom' => false,
        'orderableMinAmountTo' => false,
        'orderableMaxAmount' => false,
        'orderableMaxAmountFrom' => false,
        'orderableMaxAmountTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllPricelistDetailsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists/{id}/snapshot';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetListOfQuantityDiscountsResponse\GetListOfQuantityDiscountsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/getlistofquantitydiscounts
 *
 * @method GetListOfQuantityDiscounts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfQuantityDiscounts extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'customerGroupCode' => false,
        'validFrom' => false,
        'validTo' => false,
        'status' => false,
        'isActive' => false,
        'includeUnregisteredCustomers' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfQuantityDiscountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/quantity-discounts';
    }
}

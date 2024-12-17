<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetDetailOfQuantityDiscountsResponse\GetDetailOfQuantityDiscountsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/getdetailofquantitydiscounts
 *
 * @method GetDetailOfQuantityDiscounts setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfQuantityDiscounts extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfQuantityDiscountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/quantity-discounts/{id}';
    }
}

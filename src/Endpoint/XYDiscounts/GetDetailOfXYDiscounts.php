<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetDetailOfXYDiscountsResponse\GetDetailOfXYDiscountsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/XY-discounts/getdetailofxydiscounts
 *
 * @method GetDetailOfXYDiscounts setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfXYDiscounts extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfXYDiscountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts/{id}';
    }
}

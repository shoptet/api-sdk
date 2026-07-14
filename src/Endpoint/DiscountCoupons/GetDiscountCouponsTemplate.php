<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/getdiscountcouponstemplate
 *
 * @method GetDiscountCouponsTemplate setBody(null $entity)
 * @method null getBody()
 */
class GetDiscountCouponsTemplate extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDiscountCouponsTemplateResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/templates/{guid}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDetailOfDiscountCouponResponse\GetDetailOfDiscountCouponResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/getdetailofdiscountcoupon
 *
 * @method GetDetailOfDiscountCoupon setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfDiscountCoupon extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfDiscountCouponResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/{code}';
    }
}

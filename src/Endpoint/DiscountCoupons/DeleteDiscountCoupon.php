<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\DeleteDiscountCouponResponse\DeleteDiscountCouponResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/deletediscountcoupon
 *
 * @method DeleteDiscountCoupon setBody(null $entity)
 * @method null getBody()
 */
class DeleteDiscountCoupon extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteDiscountCouponResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/{code}';
    }
}

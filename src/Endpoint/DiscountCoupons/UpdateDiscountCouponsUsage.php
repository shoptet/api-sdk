<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsUsageRequest\UpdateDiscountCouponsUsageRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsUsageResponse\UpdateDiscountCouponsUsageResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/updatediscountcouponsusage
 *
 * @method UpdateDiscountCouponsUsage setBody(null|array|UpdateDiscountCouponsUsageRequest $entity)
 * @method null|UpdateDiscountCouponsUsageRequest getBody()
 */
class UpdateDiscountCouponsUsage extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'suppressOrderChecking' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateDiscountCouponsUsageRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateDiscountCouponsUsageResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/use/{code}';
    }
}

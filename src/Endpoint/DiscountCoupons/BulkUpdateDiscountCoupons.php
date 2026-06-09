<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkUpdateDiscountCouponsRequest\BulkUpdateDiscountCouponsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkUpdateDiscountCouponsResponse\BulkUpdateDiscountCouponsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/bulkupdatediscountcoupons
 *
 * @method BulkUpdateDiscountCoupons setBody(null|array<string, mixed>|BulkUpdateDiscountCouponsRequest $entity)
 * @method null|BulkUpdateDiscountCouponsRequest getBody()
 */
class BulkUpdateDiscountCoupons extends Patch
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return BulkUpdateDiscountCouponsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return BulkUpdateDiscountCouponsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons';
    }
}

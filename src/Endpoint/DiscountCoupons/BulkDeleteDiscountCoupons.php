<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsRequest\BulkDeleteDiscountCouponsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsResponse\BulkDeleteDiscountCouponsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/bulkdeletediscountcoupons
 *
 * @method BulkDeleteDiscountCoupons setBody(null|array<string, mixed>|BulkDeleteDiscountCouponsRequest $entity)
 * @method null|BulkDeleteDiscountCouponsRequest getBody()
 */
class BulkDeleteDiscountCoupons extends Delete
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return BulkDeleteDiscountCouponsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return BulkDeleteDiscountCouponsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons';
    }
}

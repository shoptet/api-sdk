<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsRequest\CreateDiscountCouponsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsResponse\CreateDiscountCouponsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/creatediscountcoupons
 *
 * @method CreateDiscountCoupons setBody(null|array|CreateDiscountCouponsRequest $entity)
 * @method null|CreateDiscountCouponsRequest getBody()
 */
class CreateDiscountCoupons extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateDiscountCouponsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateDiscountCouponsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons';
    }
}

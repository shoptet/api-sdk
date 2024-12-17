<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsSetRequest\CreateDiscountCouponsSetRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsSetResponse\CreateDiscountCouponsSetResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/creatediscountcouponsset
 *
 * @method CreateDiscountCouponsSet setBody(null|array|CreateDiscountCouponsSetRequest $entity)
 * @method null|CreateDiscountCouponsSetRequest getBody()
 */
class CreateDiscountCouponsSet extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateDiscountCouponsSetRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateDiscountCouponsSetResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/set';
    }
}

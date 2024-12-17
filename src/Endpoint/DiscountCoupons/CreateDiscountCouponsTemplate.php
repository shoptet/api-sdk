<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateRequest\CreateDiscountCouponsTemplateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/creatediscountcouponstemplate
 *
 * @method CreateDiscountCouponsTemplate setBody(null|array|CreateDiscountCouponsTemplateRequest $entity)
 * @method null|CreateDiscountCouponsTemplateRequest getBody()
 */
class CreateDiscountCouponsTemplate extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateDiscountCouponsTemplateRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateDiscountCouponsTemplateResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/templates';
    }
}

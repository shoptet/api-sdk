<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsRequest\UpdateDiscountCouponsTemplateProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsResponse\UpdateDiscountCouponsTemplateProductsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/updatediscountcouponstemplateproducts
 *
 * @method UpdateDiscountCouponsTemplateProducts setBody(null|array<string, mixed>|UpdateDiscountCouponsTemplateProductsRequest $entity)
 * @method null|UpdateDiscountCouponsTemplateProductsRequest getBody()
 */
class UpdateDiscountCouponsTemplateProducts extends Put
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateDiscountCouponsTemplateProductsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateDiscountCouponsTemplateProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/templates/{guid}/products';
    }
}

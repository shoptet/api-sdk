<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\DeleteDiscountCouponsTemplateResponse\DeleteDiscountCouponsTemplateResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/deletediscountcouponstemplate
 *
 * @method DeleteDiscountCouponsTemplate setBody(null $entity)
 * @method null getBody()
 */
class DeleteDiscountCouponsTemplate extends Delete
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteDiscountCouponsTemplateResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/templates/{guid}';
    }
}

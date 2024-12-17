<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetTemplatesOfDiscountCouponsResponse\GetTemplatesOfDiscountCouponsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/gettemplatesofdiscountcoupons
 *
 * @method GetTemplatesOfDiscountCoupons setBody(null $entity)
 * @method null getBody()
 */
class GetTemplatesOfDiscountCoupons extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetTemplatesOfDiscountCouponsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/templates';
    }
}

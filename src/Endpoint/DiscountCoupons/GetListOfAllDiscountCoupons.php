<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfAllDiscountCouponsResponse\GetListOfAllDiscountCouponsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/getlistofalldiscountcoupons
 *
 * @method GetListOfAllDiscountCoupons setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllDiscountCoupons extends Get
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'discountType' => false,
        'validFrom' => false,
        'validTo' => false,
        'reusable' => false,
        'template' => true,
        'currency' => false,
        'shippingPrice' => true,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllDiscountCouponsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons/snapshot';
    }
}

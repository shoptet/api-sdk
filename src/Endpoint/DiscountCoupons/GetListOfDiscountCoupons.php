<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons;

use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfDiscountCouponsResponse\GetListOfDiscountCouponsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Discount-coupons/getlistofdiscountcoupons
 *
 * @method GetListOfDiscountCoupons setBody(null $entity)
 * @method null getBody()
 */
class GetListOfDiscountCoupons extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'template' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'reusable' => false,
        'validFrom' => false,
        'validTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfDiscountCouponsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discount-coupons';
    }
}

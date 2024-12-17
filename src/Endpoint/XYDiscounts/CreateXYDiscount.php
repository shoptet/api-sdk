<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\CreateXYDiscountRequest\CreateXYDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\CreateXYDiscountResponse\CreateXYDiscountResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/XY-discounts/createxydiscount
 *
 * @method CreateXYDiscount setBody(null|array|CreateXYDiscountRequest $entity)
 * @method null|CreateXYDiscountRequest getBody()
 */
class CreateXYDiscount extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateXYDiscountRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateXYDiscountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts';
    }
}

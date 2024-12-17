<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountResponse\CreateQuantityDiscountResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/createquantitydiscount
 *
 * @method CreateQuantityDiscount setBody(null|array|CreateQuantityDiscountRequest $entity)
 * @method null|CreateQuantityDiscountRequest getBody()
 */
class CreateQuantityDiscount extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateQuantityDiscountRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateQuantityDiscountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/quantity-discounts';
    }
}

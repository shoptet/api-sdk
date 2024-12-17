<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountRequest\UpdateQuantityDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountResponse\UpdateQuantityDiscountResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/updatequantitydiscount
 *
 * @method UpdateQuantityDiscount setBody(null|array|UpdateQuantityDiscountRequest $entity)
 * @method null|UpdateQuantityDiscountRequest getBody()
 */
class UpdateQuantityDiscount extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateQuantityDiscountRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateQuantityDiscountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/quantity-discounts/{id}';
    }
}

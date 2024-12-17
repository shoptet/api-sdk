<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\DeleteQuantityDiscountResponse\DeleteQuantityDiscountResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/deletequantitydiscount
 *
 * @method DeleteQuantityDiscount setBody(null $entity)
 * @method null getBody()
 */
class DeleteQuantityDiscount extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteQuantityDiscountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/quantity-discounts/{id}';
    }
}

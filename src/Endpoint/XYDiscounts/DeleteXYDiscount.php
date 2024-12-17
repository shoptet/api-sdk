<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\DeleteXYDiscountResponse\DeleteXYDiscountResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/XY-discounts/deletexydiscount
 *
 * @method DeleteXYDiscount setBody(null $entity)
 * @method null getBody()
 */
class DeleteXYDiscount extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteXYDiscountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts/{id}';
    }
}

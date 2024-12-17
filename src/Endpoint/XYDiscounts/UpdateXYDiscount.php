<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountRequest\UpdateXYDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountResponse\UpdateXYDiscountResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/XY-discounts/updatexydiscount
 *
 * @method UpdateXYDiscount setBody(null|array|UpdateXYDiscountRequest $entity)
 * @method null|UpdateXYDiscountRequest getBody()
 */
class UpdateXYDiscount extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateXYDiscountRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateXYDiscountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts/{id}';
    }
}

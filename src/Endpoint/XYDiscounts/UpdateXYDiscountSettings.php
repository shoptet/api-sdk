<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountSettingsRequest\UpdateXYDiscountSettingsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountSettingsResponse\UpdateXYDiscountSettingsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/updatexydiscountsettings
 *
 * @method UpdateXYDiscountSettings setBody(null|array<string, mixed>|UpdateXYDiscountSettingsRequest $entity)
 * @method null|UpdateXYDiscountSettingsRequest getBody()
 */
class UpdateXYDiscountSettings extends Patch
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateXYDiscountSettingsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateXYDiscountSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts/settings';
    }
}

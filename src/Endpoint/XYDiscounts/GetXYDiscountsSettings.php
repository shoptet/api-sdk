<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetXYDiscountsSettingsResponse\GetXYDiscountsSettingsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/XY-discounts/getxydiscountssettings
 *
 * @method GetXYDiscountsSettings setBody(null $entity)
 * @method null getBody()
 */
class GetXYDiscountsSettings extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetXYDiscountsSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts/settings';
    }
}

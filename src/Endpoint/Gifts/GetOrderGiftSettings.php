<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Gifts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Gifts\GetOrderGiftSettingsResponse\GetOrderGiftSettingsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Gifts/getordergiftsettings
 *
 * @method GetOrderGiftSettings setBody(null $entity)
 * @method null getBody()
 */
class GetOrderGiftSettings extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOrderGiftSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/gifts/settings';
    }
}

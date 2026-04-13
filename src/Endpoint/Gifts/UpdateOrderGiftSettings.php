<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Gifts;

use Shoptet\Api\Sdk\Php\Endpoint\Gifts\UpdateOrderGiftSettingsRequest\UpdateOrderGiftSettingsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Gifts\UpdateOrderGiftSettingsResponse\UpdateOrderGiftSettingsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Gifts/updateordergiftsettings
 *
 * @method UpdateOrderGiftSettings setBody(null|array<string, mixed>|UpdateOrderGiftSettingsRequest $entity)
 * @method null|UpdateOrderGiftSettingsRequest getBody()
 */
class UpdateOrderGiftSettings extends Patch
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateOrderGiftSettingsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateOrderGiftSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/gifts/settings';
    }
}

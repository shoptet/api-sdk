<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderGifts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\GetOrderGiftsListResponse\GetOrderGiftsListResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-gifts/getordergiftslist
 *
 * @method GetOrderGiftsList setBody(null $entity)
 * @method null getBody()
 */
class GetOrderGiftsList extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOrderGiftsListResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/gifts';
    }
}

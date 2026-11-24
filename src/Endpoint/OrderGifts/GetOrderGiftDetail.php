<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderGifts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\GetOrderGiftDetailResponse\GetOrderGiftDetailResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-gifts/getordergiftdetail
 *
 * @method GetOrderGiftDetail setBody(null $entity)
 * @method null getBody()
 */
class GetOrderGiftDetail extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOrderGiftDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/gifts/{id}';
    }
}

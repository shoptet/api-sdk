<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderGifts;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\DeleteOrderGiftResponse\DeleteOrderGiftResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-gifts/deleteordergift
 *
 * @method DeleteOrderGift setBody(null $entity)
 * @method null getBody()
 */
class DeleteOrderGift extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOrderGiftResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/gifts/{id}';
    }
}

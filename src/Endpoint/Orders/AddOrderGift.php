<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderGiftRequest\AddOrderGiftRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderGiftResponse\AddOrderGiftResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/addordergift
 *
 * @method AddOrderGift setBody(null|array|AddOrderGiftRequest $entity)
 * @method null|AddOrderGiftRequest getBody()
 */
class AddOrderGift extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return AddOrderGiftRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return AddOrderGiftResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/gifts';
    }
}

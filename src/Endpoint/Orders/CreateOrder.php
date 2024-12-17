<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderResponse\CreateOrderResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/createorder
 *
 * @method CreateOrder setBody(null|array|CreateOrderRequest $entity)
 * @method null|CreateOrderRequest getBody()
 */
class CreateOrder extends Post
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'suppressDocumentGeneration' => false,
        'suppressEmailSending' => false,
        'suppressProductChecking' => false,
        'suppressStockMovements' => false,
        'suppressHistoricalMandatoryFields' => false,
        'suppressHistoricalPaymentChecking' => false,
        'suppressHistoricalShippingChecking' => false,
    ];

    public function getRequestEntityClass(): string
    {
        return CreateOrderRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders';
    }
}

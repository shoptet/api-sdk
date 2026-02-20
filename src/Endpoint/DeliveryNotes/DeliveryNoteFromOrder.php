<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes;

use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DeliveryNoteFromOrderRequest\DeliveryNoteFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DeliveryNoteFromOrderResponse\DeliveryNoteFromOrderResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery-notes/deliverynotefromorder
 *
 * @method DeliveryNoteFromOrder setBody(null|array<string, mixed>|DeliveryNoteFromOrderRequest $entity)
 * @method null|DeliveryNoteFromOrderRequest getBody()
 */
class DeliveryNoteFromOrder extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return DeliveryNoteFromOrderRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return DeliveryNoteFromOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/delivery-notes';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes;

use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNoteResponse\GetDetailOfDeliveryNoteResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Delivery-notes/getdetailofdeliverynote
 *
 * @method GetDetailOfDeliveryNote setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfDeliveryNote extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfDeliveryNoteResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/delivery-notes/{code}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes;

use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfDeliveryNotesResponse\GetListOfDeliveryNotesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Delivery-notes/getlistofdeliverynotes
 *
 * @method GetListOfDeliveryNotes setBody(null $entity)
 * @method null getBody()
 */
class GetListOfDeliveryNotes extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'isValid' => false,
        'orderCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfDeliveryNotesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/delivery-notes';
    }
}

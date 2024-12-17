<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes;

use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfAllDeliveryNotesResponse\GetListOfAllDeliveryNotesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Delivery-notes/getlistofalldeliverynotes
 *
 * @method GetListOfAllDeliveryNotes setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllDeliveryNotes extends Get
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'orderCodeFrom' => false,
        'orderCodeTo' => false,
        'customerGuid' => false,
        'isValid' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllDeliveryNotesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/delivery-notes/snapshot';
    }
}

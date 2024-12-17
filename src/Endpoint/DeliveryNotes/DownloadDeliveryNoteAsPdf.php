<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes;

use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Delivery-notes/downloaddeliverynoteaspdf
 *
 * @method DownloadDeliveryNoteAsPdf setBody(null $entity)
 * @method null getBody()
 */
class DownloadDeliveryNoteAsPdf extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): null
    {
        return null;
    }

    public function getEndpoint(): string
    {
        return '/api/delivery-notes/{code}/pdf';
    }
}

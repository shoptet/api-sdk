<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/downloadorderaspdf
 *
 * @method DownloadOrderAsPdf setBody(null $entity)
 * @method null getBody()
 */
class DownloadOrderAsPdf extends Get
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
        return '/api/orders/{code}/pdf';
    }
}

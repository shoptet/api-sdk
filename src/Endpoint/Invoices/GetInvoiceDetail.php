<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetInvoiceDetailResponse\GetInvoiceDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Invoices/getinvoicedetail
 *
 * @method GetInvoiceDetail setBody(null $entity)
 * @method null getBody()
 */
class GetInvoiceDetail extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetInvoiceDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices/{code}';
    }
}

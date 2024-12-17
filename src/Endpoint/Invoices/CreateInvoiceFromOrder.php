<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrderRequest\CreateInvoiceFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrderResponse\CreateInvoiceFromOrderResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Invoices/createinvoicefromorder
 *
 * @method CreateInvoiceFromOrder setBody(null|array|CreateInvoiceFromOrderRequest $entity)
 * @method null|CreateInvoiceFromOrderRequest getBody()
 */
class CreateInvoiceFromOrder extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'suppressExistenceCheck' => false];

    public function getRequestEntityClass(): string
    {
        return CreateInvoiceFromOrderRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateInvoiceFromOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/invoice';
    }
}

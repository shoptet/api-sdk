<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getlistofremarksfororder
 *
 * @method GetListOfRemarksForOrder setBody(null $entity)
 * @method null getBody()
 */
class GetListOfRemarksForOrder extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'system' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfRemarksForOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/history';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderHistory;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/getlistofremarksfororder
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

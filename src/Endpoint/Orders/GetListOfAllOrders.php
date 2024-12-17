<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfAllOrdersResponse\GetListOfAllOrdersResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getlistofallorders
 *
 * @method GetListOfAllOrders setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllOrders extends Get
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'include' => false,
        'statusId' => false,
        'shippingGuid' => false,
        'shippingCompanyCode' => false,
        'paymentMethodGuid' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'customerGuid' => false,
        'email' => false,
        'phone' => false,
        'productCode' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
        'sourceId' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllOrdersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/snapshot';
    }
}

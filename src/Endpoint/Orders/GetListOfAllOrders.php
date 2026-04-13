<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfAllOrdersResponse\GetListOfAllOrdersResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getlistofallorders
 *
 * @method GetListOfAllOrders setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllOrders extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'include' => false,
        'orderCodes' => false,
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

    public function getSnapshotResultEntityClass(): string
    {
        return OrderSnapshot::class;
    }
}

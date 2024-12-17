<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getlistoforders
 *
 * @method GetListOfOrders setBody(null $entity)
 * @method null getBody()
 */
class GetListOfOrders extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
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
        return GetListOfOrdersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders';
    }
}

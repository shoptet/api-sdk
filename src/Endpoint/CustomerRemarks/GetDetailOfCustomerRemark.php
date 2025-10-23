<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\GetDetailOfCustomerRemarkResponse\GetDetailOfCustomerRemarkResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/getdetailofcustomerremark
 *
 * @method GetDetailOfCustomerRemark setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfCustomerRemark extends Get
{
    protected array $supportedPathParams = ['guid' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfCustomerRemarkResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/remarks/{id}';
    }
}

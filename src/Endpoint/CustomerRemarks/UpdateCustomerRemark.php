<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\UpdateCustomerRemarkRequest\UpdateCustomerRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\UpdateCustomerRemarkResponse\UpdateCustomerRemarkResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/updatecustomerremark
 *
 * @method UpdateCustomerRemark setBody(null|array<string, mixed>|UpdateCustomerRemarkRequest $entity)
 * @method null|UpdateCustomerRemarkRequest getBody()
 */
class UpdateCustomerRemark extends Patch
{
    protected array $supportedPathParams = ['guid' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCustomerRemarkRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCustomerRemarkResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/remarks/{id}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests;

use Shoptet\Api\Sdk\Php\Endpoint\Put;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataRequest\UpdateShippingDataRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataResponse\UpdateShippingDataResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Shipping-requests/updateshippingdata
 *
 * @method UpdateShippingData setBody(null|array|UpdateShippingDataRequest $entity)
 * @method null|UpdateShippingDataRequest getBody()
 */
class UpdateShippingData extends Put
{
    protected array $supportedPathParams = ['shippingRequestCode' => true, 'shippingGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateShippingDataRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateShippingDataResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-request/{shippingRequestCode}/{shippingGuid}';
    }
}

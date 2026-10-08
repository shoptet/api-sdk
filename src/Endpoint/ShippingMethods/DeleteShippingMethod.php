<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\DeleteShippingMethodResponse\DeleteShippingMethodResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-methods/deleteshippingmethod
 *
 * @method DeleteShippingMethod setBody(null $entity)
 * @method null getBody()
 */
class DeleteShippingMethod extends Delete
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteShippingMethodResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-methods/{guid}';
    }
}

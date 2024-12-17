<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderItemSurchargeParametersResponse\DeleteOrderItemSurchargeParametersResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/deleteorderitemsurchargeparameters
 *
 * @method DeleteOrderItemSurchargeParameters setBody(null $entity)
 * @method null getBody()
 */
class DeleteOrderItemSurchargeParameters extends Delete
{
    protected array $supportedPathParams = ['code' => true, 'id' => true, 'relationId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOrderItemSurchargeParametersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/item/{id}/surcharge-parameters/{relationId}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetLastOrderChangesResponse\GetLastOrderChangesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/getlastorderchanges
 *
 * @method GetLastOrderChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastOrderChanges extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastOrderChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/changes';
    }
}

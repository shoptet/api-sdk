<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SalesChannels;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Sales-channels/getsaleschannelsdetailbyid
 *
 * @method GetSalesChannelsDetailById setBody(null $entity)
 * @method null getBody()
 */
class GetSalesChannelsDetailById extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetSalesChannelsDetailByIdResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/sales-channels/id/{id}';
    }
}

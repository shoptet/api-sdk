<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SalesChannels;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsResponse\GetSalesChannelsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Sales-channels/getsaleschannels
 *
 * @method GetSalesChannels setBody(null $entity)
 * @method null getBody()
 */
class GetSalesChannels extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetSalesChannelsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/sales-channels';
    }
}

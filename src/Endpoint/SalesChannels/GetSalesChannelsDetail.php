<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SalesChannels;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailResponse\GetSalesChannelsDetailResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Sales-channels/getsaleschannelsdetail
 *
 * @method GetSalesChannelsDetail setBody(null $entity)
 * @method null getBody()
 */
class GetSalesChannelsDetail extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetSalesChannelsDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/sales-channels/{guid}';
    }
}

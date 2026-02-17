<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OnlineStores;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetOnlineStoreDetailResponse\GetOnlineStoreDetailResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Online-stores/getonlinestoredetail
 *
 * @method GetOnlineStoreDetail setBody(null $entity)
 * @method null getBody()
 */
class GetOnlineStoreDetail extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetOnlineStoreDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/online-stores/{id}';
    }
}

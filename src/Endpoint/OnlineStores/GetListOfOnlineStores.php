<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OnlineStores;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetListOfOnlineStoresResponse\GetListOfOnlineStoresResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Online-stores/getlistofonlinestores
 *
 * @method GetListOfOnlineStores setBody(null $entity)
 * @method null getBody()
 */
class GetListOfOnlineStores extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfOnlineStoresResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/online-stores';
    }
}

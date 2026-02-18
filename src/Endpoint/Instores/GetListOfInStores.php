<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Instores;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Instores\GetListOfInStoresResponse\GetListOfInStoresResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/In-stores/getlistofinstores
 *
 * @method GetListOfInStores setBody(null $entity)
 * @method null getBody()
 */
class GetListOfInStores extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfInStoresResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/in-stores';
    }
}

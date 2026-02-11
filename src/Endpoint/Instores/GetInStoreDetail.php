<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Instores;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Instores\GetInStoreDetailResponse\GetInStoreDetailResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/In-stores/getinstoredetail
 *
 * @method GetInStoreDetail setBody(null $entity)
 * @method null getBody()
 */
class GetInStoreDetail extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetInStoreDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/in-stores/{id}';
    }
}

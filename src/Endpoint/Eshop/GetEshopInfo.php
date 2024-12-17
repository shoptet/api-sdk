<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop;

use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Eshop/geteshopinfo
 *
 * @method GetEshopInfo setBody(null $entity)
 * @method null getBody()
 */
class GetEshopInfo extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetEshopInfoResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop';
    }
}

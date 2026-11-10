<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop;

use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopSoulResponse\GetEshopSoulResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Eshop/geteshopsoul
 *
 * @method GetEshopSoul setBody(null $entity)
 * @method null getBody()
 */
class GetEshopSoul extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetEshopSoulResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop/soul';
    }
}

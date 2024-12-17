<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop;

use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Eshop/geteshopdesign
 *
 * @method GetEshopDesign setBody(null $entity)
 * @method null getBody()
 */
class GetEshopDesign extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetEshopDesignResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop/design';
    }
}

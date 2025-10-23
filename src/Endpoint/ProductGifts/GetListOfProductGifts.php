<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductGifts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\GetListOfProductGiftsResponse\GetListOfProductGiftsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-gifts/getlistofproductgifts
 *
 * @method GetListOfProductGifts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductGifts extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductGiftsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/gifts';
    }
}

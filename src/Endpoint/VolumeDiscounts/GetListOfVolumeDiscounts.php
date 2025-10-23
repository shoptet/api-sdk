<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VolumeDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\VolumeDiscounts\GetListOfVolumeDiscountsResponse\GetListOfVolumeDiscountsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Volume-discounts/getlistofvolumediscounts
 *
 * @method GetListOfVolumeDiscounts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfVolumeDiscounts extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'customerGroupCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfVolumeDiscountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/volume-discounts';
    }
}

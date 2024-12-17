<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscountsResponse\GetListOfXYDiscountsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/XY-discounts/getlistofxydiscounts
 *
 * @method GetListOfXYDiscounts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfXYDiscounts extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'customerGroupCode' => false,
        'validFrom' => false,
        'validTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfXYDiscountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/xy-discounts';
    }
}

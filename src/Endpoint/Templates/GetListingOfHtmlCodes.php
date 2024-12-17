<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Templates;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\GetListingOfHtmlCodesResponse\GetListingOfHtmlCodesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Templates/getlistingofhtmlcodes
 *
 * @method GetListingOfHtmlCodes setBody(null $entity)
 * @method null getBody()
 */
class GetListingOfHtmlCodes extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListingOfHtmlCodesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/template-include';
    }
}

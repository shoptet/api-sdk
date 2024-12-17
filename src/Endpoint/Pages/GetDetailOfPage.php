<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetDetailOfPageResponse\GetDetailOfPageResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Pages/getdetailofpage
 *
 * @method GetDetailOfPage setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfPage extends Get
{
    protected array $supportedPathParams = ['pageId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfPageResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pages/{pageId}';
    }
}

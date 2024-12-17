<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPagesResponse\GetListOfPagesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Pages/getlistofpages
 *
 * @method GetListOfPages setBody(null $entity)
 * @method null getBody()
 */
class GetListOfPages extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfPagesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pages';
    }
}

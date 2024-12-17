<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Templates;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesRequest\CreateAndEditHtmlCodesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesResponse\CreateAndEditHtmlCodesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Templates/createandedithtmlcodes
 *
 * @method CreateAndEditHtmlCodes setBody(null|array|CreateAndEditHtmlCodesRequest $entity)
 * @method null|CreateAndEditHtmlCodesRequest getBody()
 */
class CreateAndEditHtmlCodes extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateAndEditHtmlCodesRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateAndEditHtmlCodesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/template-include';
    }
}

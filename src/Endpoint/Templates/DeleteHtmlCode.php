<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Templates;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\DeleteHtmlCodeResponse\DeleteHtmlCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Templates/deletehtmlcode
 *
 * @method DeleteHtmlCode setBody(null $entity)
 * @method null getBody()
 */
class DeleteHtmlCode extends Delete
{
    protected array $supportedPathParams = ['location' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteHtmlCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/template-include/{location}';
    }
}

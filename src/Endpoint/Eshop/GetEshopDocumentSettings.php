<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop;

use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Eshop/geteshopdocumentsettings
 *
 * @method GetEshopDocumentSettings setBody(null $entity)
 * @method null getBody()
 */
class GetEshopDocumentSettings extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetEshopDocumentSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop/document-settings';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop;

use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Eshop/geteshopmandatoryfields
 *
 * @method GetEshopMandatoryFields setBody(null $entity)
 * @method null getBody()
 */
class GetEshopMandatoryFields extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetEshopMandatoryFieldsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eshop/customer-fields';
    }
}

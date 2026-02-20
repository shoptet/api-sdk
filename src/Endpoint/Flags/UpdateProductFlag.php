<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Flags;

use Shoptet\Api\Sdk\Php\Endpoint\Flags\UpdateProductFlagRequest\UpdateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\UpdateProductFlagResponse\UpdateProductFlagResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/updateproductflag
 *
 * @method UpdateProductFlag setBody(null|array<string, mixed>|UpdateProductFlagRequest $entity)
 * @method null|UpdateProductFlagRequest getBody()
 */
class UpdateProductFlag extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductFlagRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductFlagResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/flags/{code}';
    }
}

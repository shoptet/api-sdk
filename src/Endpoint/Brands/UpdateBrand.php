<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands;

use Shoptet\Api\Sdk\Php\Endpoint\Brands\UpdateBrandRequest\UpdateBrandRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\UpdateBrandResponse\UpdateBrandResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Brands/updatebrand
 *
 * @method UpdateBrand setBody(null|array|UpdateBrandRequest $entity)
 * @method null|UpdateBrandRequest getBody()
 */
class UpdateBrand extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateBrandRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateBrandResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/brands/{code}';
    }
}

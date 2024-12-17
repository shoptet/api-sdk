<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands;

use Shoptet\Api\Sdk\Php\Endpoint\Brands\DeleteBrandResponse\DeleteBrandResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Brands/deletebrand
 *
 * @method DeleteBrand setBody(null $entity)
 * @method null getBody()
 */
class DeleteBrand extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'deleteUsed' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteBrandResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/brands/{code}';
    }
}

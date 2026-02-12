<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\DeleteDiscussionByIdResponse\DeleteDiscussionByIdResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/deletediscussionbyid
 *
 * @method DeleteDiscussionById setBody(null $entity)
 * @method null getBody()
 */
class DeleteDiscussionById extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteDiscussionByIdResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discussions-posts/{id}';
    }
}

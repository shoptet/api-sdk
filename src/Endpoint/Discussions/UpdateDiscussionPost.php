<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions;

use Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostRequest\UpdateDiscussionPostRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostResponse\UpdateDiscussionPostResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/updatediscussionpost
 *
 * @method UpdateDiscussionPost setBody(null|array<string, mixed>|UpdateDiscussionPostRequest $entity)
 * @method null|UpdateDiscussionPostRequest getBody()
 */
class UpdateDiscussionPost extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateDiscussionPostRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateDiscussionPostResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discussions-posts/{id}';
    }
}

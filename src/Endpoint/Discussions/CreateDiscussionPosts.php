<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions;

use Shoptet\Api\Sdk\Php\Endpoint\Discussions\CreateDiscussionPostsRequest\CreateDiscussionPostsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\CreateDiscussionPostsResponse\CreateDiscussionPostsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/creatediscussionposts
 *
 * @method CreateDiscussionPosts setBody(null|array|CreateDiscussionPostsRequest $entity)
 * @method null|CreateDiscussionPostsRequest getBody()
 */
class CreateDiscussionPosts extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateDiscussionPostsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateDiscussionPostsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discussions-posts';
    }
}

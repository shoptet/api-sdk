<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions;

use Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPostsResponse\GetListOfDiscussionPostsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Discussions/getlistofdiscussionposts
 *
 * @method GetListOfDiscussionPosts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfDiscussionPosts extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'productGuid' => false,
        'userEmail' => false,
        'creationDateFrom' => false,
        'creationDateTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfDiscussionPostsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/discussions-posts';
    }
}

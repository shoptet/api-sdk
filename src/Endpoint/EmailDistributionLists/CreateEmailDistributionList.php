<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists;

use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionListRequest\CreateEmailDistributionListRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionListResponse\CreateEmailDistributionListResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/createemaildistributionlist
 *
 * @method CreateEmailDistributionList setBody(null|array|CreateEmailDistributionListRequest $entity)
 * @method null|CreateEmailDistributionListRequest getBody()
 */
class CreateEmailDistributionList extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateEmailDistributionListRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateEmailDistributionListResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/mailing-lists';
    }
}

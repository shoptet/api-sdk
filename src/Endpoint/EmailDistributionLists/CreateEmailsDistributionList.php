<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists;

use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListRequest\CreateEmailsDistributionListRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListResponse\CreateEmailsDistributionListResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/createemailsdistributionlist
 *
 * @method CreateEmailsDistributionList setBody(null|array|CreateEmailsDistributionListRequest $entity)
 * @method null|CreateEmailsDistributionListRequest getBody()
 */
class CreateEmailsDistributionList extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateEmailsDistributionListRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateEmailsDistributionListResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/mailing-lists/{code}';
    }
}

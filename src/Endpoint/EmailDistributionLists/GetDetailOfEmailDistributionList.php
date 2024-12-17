<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists;

use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionListResponse\GetDetailOfEmailDistributionListResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/getdetailofemaildistributionlist
 *
 * @method GetDetailOfEmailDistributionList setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfEmailDistributionList extends PageableGet
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfEmailDistributionListResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/mailing-lists/{code}';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists;

use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetLastChangesInDistributionListResponse\GetLastChangesInDistributionListResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/getlastchangesindistributionlist
 *
 * @method GetLastChangesInDistributionList setBody(null $entity)
 * @method null getBody()
 */
class GetLastChangesInDistributionList extends PageableGet
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastChangesInDistributionListResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/mailing-lists/{code}/changes';
    }
}

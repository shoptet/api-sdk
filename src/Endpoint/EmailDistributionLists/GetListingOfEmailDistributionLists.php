<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists;

use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetListingOfEmailDistributionListsResponse\GetListingOfEmailDistributionListsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/getlistingofemaildistributionlists
 *
 * @method GetListingOfEmailDistributionLists setBody(null $entity)
 * @method null getBody()
 */
class GetListingOfEmailDistributionLists extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListingOfEmailDistributionListsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/mailing-lists';
    }
}

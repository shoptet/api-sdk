<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmailsResponse\GetListingOfUnsubscribedEmailsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Unsubscribed-emails/getlistingofunsubscribedemails
 *
 * @method GetListingOfUnsubscribedEmails setBody(null $entity)
 * @method null getBody()
 */
class GetListingOfUnsubscribedEmails extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListingOfUnsubscribedEmailsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/unsubscribed-emails';
    }
}

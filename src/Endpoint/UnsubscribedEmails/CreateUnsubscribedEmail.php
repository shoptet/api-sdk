<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailRequest\CreateUnsubscribedEmailRequest;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailResponse\CreateUnsubscribedEmailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Unsubscribed-emails/createunsubscribedemail
 *
 * @method CreateUnsubscribedEmail setBody(null|array|CreateUnsubscribedEmailRequest $entity)
 * @method null|CreateUnsubscribedEmailRequest getBody()
 */
class CreateUnsubscribedEmail extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateUnsubscribedEmailRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateUnsubscribedEmailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/unsubscribed-emails';
    }
}

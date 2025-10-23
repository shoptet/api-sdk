<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmailsResponse\GetListingOfUnsubscribedEmailsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmailsResponse\GetListingOfUnsubscribedEmailsResponse\Data\UnsubscribedEmails;

class Data extends Entity
{
    protected UnsubscribedEmails $unsubscribedEmails;
    protected Paginator $paginator;

    public function getUnsubscribedEmails(): UnsubscribedEmails
    {
        return $this->unsubscribedEmails;
    }

    public function setUnsubscribedEmails(UnsubscribedEmails $unsubscribedEmails): static
    {
        $this->unsubscribedEmails = $unsubscribedEmails;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

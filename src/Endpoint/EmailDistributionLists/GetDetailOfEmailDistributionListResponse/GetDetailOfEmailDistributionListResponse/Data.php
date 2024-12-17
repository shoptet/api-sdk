<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionListResponse\GetDetailOfEmailDistributionListResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionListResponse\GetDetailOfEmailDistributionListResponse\Data\Emails;

class Data extends Entity
{
    protected Emails $emails;
    protected Paginator $paginator;

    public function getEmails(): Emails
    {
        return $this->emails;
    }

    public function setEmails(Emails $emails): static
    {
        $this->emails = $emails;
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

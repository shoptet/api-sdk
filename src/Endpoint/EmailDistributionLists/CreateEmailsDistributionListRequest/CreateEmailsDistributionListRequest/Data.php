<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListRequest\CreateEmailsDistributionListRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListRequest\CreateEmailsDistributionListRequest\Data\Emails;

class Data extends Entity
{
    protected Emails $emails;

    public function getEmails(): Emails
    {
        return $this->emails;
    }

    public function setEmails(Emails $emails): static
    {
        $this->emails = $emails;
        return $this;
    }
}

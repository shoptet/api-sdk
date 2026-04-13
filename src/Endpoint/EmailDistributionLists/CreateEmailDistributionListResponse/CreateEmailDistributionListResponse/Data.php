<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionListResponse\CreateEmailDistributionListResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionListResponse\CreateEmailDistributionListResponse\Data\MailingList;

class Data extends Entity
{
    protected MailingList $mailingList;

    public function getMailingList(): MailingList
    {
        return $this->mailingList;
    }

    public function setMailingList(MailingList $mailingList): static
    {
        $this->mailingList = $mailingList;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetListingOfEmailDistributionListsResponse\GetListingOfEmailDistributionListsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetListingOfEmailDistributionListsResponse\GetListingOfEmailDistributionListsResponse\Data\MailingLists;

class Data extends Entity
{
    protected MailingLists $mailingLists;

    public function getMailingLists(): MailingLists
    {
        return $this->mailingLists;
    }

    public function setMailingLists(MailingLists $mailingLists): static
    {
        $this->mailingLists = $mailingLists;
        return $this;
    }
}

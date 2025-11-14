<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListResponse\CreateEmailsDistributionListResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListResponse\CreateEmailsDistributionListResponse\Data\EmailsExisting;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListResponse\CreateEmailsDistributionListResponse\Data\EmailsInserted;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListResponse\CreateEmailsDistributionListResponse\Data\EmailsInvalid;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListResponse\CreateEmailsDistributionListResponse\Data\ErrorMessages;

class Data extends Entity
{
    protected EmailsInserted $emailsInserted;
    protected EmailsExisting $emailsExisting;
    protected EmailsInvalid $emailsInvalid;
    protected ErrorMessages $errorMessages;

    public function getEmailsInserted(): EmailsInserted
    {
        return $this->emailsInserted;
    }

    public function setEmailsInserted(EmailsInserted $emailsInserted): static
    {
        $this->emailsInserted = $emailsInserted;
        return $this;
    }

    public function getEmailsExisting(): EmailsExisting
    {
        return $this->emailsExisting;
    }

    public function setEmailsExisting(EmailsExisting $emailsExisting): static
    {
        $this->emailsExisting = $emailsExisting;
        return $this;
    }

    public function getEmailsInvalid(): EmailsInvalid
    {
        return $this->emailsInvalid;
    }

    public function setEmailsInvalid(EmailsInvalid $emailsInvalid): static
    {
        $this->emailsInvalid = $emailsInvalid;
        return $this;
    }

    public function getErrorMessages(): ErrorMessages
    {
        return $this->errorMessages;
    }

    public function setErrorMessages(ErrorMessages $errorMessages): static
    {
        $this->errorMessages = $errorMessages;
        return $this;
    }
}

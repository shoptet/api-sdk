<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailResponse\CreateUnsubscribedEmailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailResponse\CreateUnsubscribedEmailResponse\Data\UnsubscribedEmail;

class Data extends Entity
{
    protected UnsubscribedEmail $unsubscribedEmail;

    public function getUnsubscribedEmail(): UnsubscribedEmail
    {
        return $this->unsubscribedEmail;
    }

    public function setUnsubscribedEmail(UnsubscribedEmail $unsubscribedEmail): static
    {
        $this->unsubscribedEmail = $unsubscribedEmail;
        return $this;
    }
}

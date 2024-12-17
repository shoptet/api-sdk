<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmailsResponse\GetListingOfUnsubscribedEmailsResponse\Data\UnsubscribedEmails;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Item extends Entity
{
    protected string $email;
    protected TypeDateTime $unsubscribedAt;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getUnsubscribedAt(): TypeDateTime
    {
        return $this->unsubscribedAt;
    }

    public function setUnsubscribedAt(TypeDateTime $unsubscribedAt): static
    {
        $this->unsubscribedAt = $unsubscribedAt;
        return $this;
    }
}

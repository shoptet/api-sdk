<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailRequest\CreateUnsubscribedEmailRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeRequest;

class Data extends Entity
{
    protected string $email;
    protected TypeDateTimeRequest $unsubscribedAt;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getUnsubscribedAt(): TypeDateTimeRequest
    {
        return $this->unsubscribedAt;
    }

    public function setUnsubscribedAt(TypeDateTimeRequest $unsubscribedAt): static
    {
        $this->unsubscribedAt = $unsubscribedAt;
        return $this;
    }
}

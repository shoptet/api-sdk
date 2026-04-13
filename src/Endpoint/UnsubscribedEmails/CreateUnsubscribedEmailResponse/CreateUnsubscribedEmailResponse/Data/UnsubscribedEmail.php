<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailResponse\CreateUnsubscribedEmailResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class UnsubscribedEmail extends Entity
{
    protected string $email;
    protected TypeDateTimeNullable $unsubscribedAt;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getUnsubscribedAt(): TypeDateTimeNullable
    {
        return $this->unsubscribedAt;
    }

    public function setUnsubscribedAt(TypeDateTimeNullable $unsubscribedAt): static
    {
        $this->unsubscribedAt = $unsubscribedAt;
        return $this;
    }
}

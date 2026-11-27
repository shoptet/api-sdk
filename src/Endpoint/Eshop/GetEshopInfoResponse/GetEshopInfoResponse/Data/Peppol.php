<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Peppol extends Entity
{
    protected string $state;
    protected bool $isSendingEnabled;
    protected ?string $participantId;
    protected TypeDateTimeNullable $registeredAt;
    protected TypeDateTimeNullable $checkedAt;

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;
        return $this;
    }

    public function isIsSendingEnabled(): bool
    {
        return $this->isSendingEnabled;
    }

    public function setIsSendingEnabled(bool $isSendingEnabled): static
    {
        $this->isSendingEnabled = $isSendingEnabled;
        return $this;
    }

    public function getParticipantId(): ?string
    {
        return $this->participantId;
    }

    public function setParticipantId(?string $participantId): static
    {
        $this->participantId = $participantId;
        return $this;
    }

    public function getRegisteredAt(): TypeDateTimeNullable
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(TypeDateTimeNullable $registeredAt): static
    {
        $this->registeredAt = $registeredAt;
        return $this;
    }

    public function getCheckedAt(): TypeDateTimeNullable
    {
        return $this->checkedAt;
    }

    public function setCheckedAt(TypeDateTimeNullable $checkedAt): static
    {
        $this->checkedAt = $checkedAt;
        return $this;
    }
}

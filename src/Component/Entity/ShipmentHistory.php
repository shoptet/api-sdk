<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class ShipmentHistory extends Entity
{
    protected string $fromStatus;
    protected string $toStatus;
    protected TypeDateTime $realDatetime;
    protected TypeDateTime $providerDatetime;
    protected string $note;

    public function getFromStatus(): string
    {
        return $this->fromStatus;
    }

    public function setFromStatus(string $fromStatus): static
    {
        $this->fromStatus = $fromStatus;
        return $this;
    }

    public function getToStatus(): string
    {
        return $this->toStatus;
    }

    public function setToStatus(string $toStatus): static
    {
        $this->toStatus = $toStatus;
        return $this;
    }

    public function getRealDatetime(): TypeDateTime
    {
        return $this->realDatetime;
    }

    public function setRealDatetime(TypeDateTime $realDatetime): static
    {
        $this->realDatetime = $realDatetime;
        return $this;
    }

    public function getProviderDatetime(): TypeDateTime
    {
        return $this->providerDatetime;
    }

    public function setProviderDatetime(TypeDateTime $providerDatetime): static
    {
        $this->providerDatetime = $providerDatetime;
        return $this;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): static
    {
        $this->note = $note;
        return $this;
    }
}

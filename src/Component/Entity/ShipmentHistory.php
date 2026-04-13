<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class ShipmentHistory extends Entity
{
    protected string $fromStatus;
    protected string $toStatus;
    protected TypeDateTimeNullable $realDatetime;
    protected TypeDateTimeNullable $providerDatetime;
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

    public function getRealDatetime(): TypeDateTimeNullable
    {
        return $this->realDatetime;
    }

    public function setRealDatetime(TypeDateTimeNullable $realDatetime): static
    {
        $this->realDatetime = $realDatetime;
        return $this;
    }

    public function getProviderDatetime(): TypeDateTimeNullable
    {
        return $this->providerDatetime;
    }

    public function setProviderDatetime(TypeDateTimeNullable $providerDatetime): static
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

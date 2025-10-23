<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetLastCustomerChangesResponse\GetLastCustomerChangesResponse\Data\Changes;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected TypeDateTimeNullable $changeTime;
    protected string $changeType;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getChangeTime(): TypeDateTimeNullable
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTimeNullable $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getChangeType(): string
    {
        return $this->changeType;
    }

    public function setChangeType(string $changeType): static
    {
        $this->changeType = $changeType;
        return $this;
    }
}

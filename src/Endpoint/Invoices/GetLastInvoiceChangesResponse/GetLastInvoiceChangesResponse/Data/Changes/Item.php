<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetLastInvoiceChangesResponse\GetLastInvoiceChangesResponse\Data\Changes;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Item extends Entity
{
    protected string $code;
    protected TypeDateTimeNullable $changeTime;
    protected string $changeType;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class PriceListSalesChannelAssignment extends Entity
{
    protected TypeGuid $guid;
    protected bool $isPrimary;

    public function getGuid(): TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function isIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): static
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\SetItems;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;

class Item extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected string $code;
    protected TypePositiveAmount $amount;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getAmount(): TypePositiveAmount
    {
        return $this->amount;
    }

    public function setAmount(TypePositiveAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }
}

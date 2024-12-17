<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\AddItemToProductSetRequest\AddItemToProductSetRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;

class SetItem extends Entity
{
    protected string $code;
    protected TypePositiveAmount $amount;

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

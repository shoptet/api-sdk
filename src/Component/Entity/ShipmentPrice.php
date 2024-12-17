<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ShipmentPrice extends Entity
{
    protected TypePrice $value;
    protected string $currencyCode;

    public function getValue(): TypePrice
    {
        return $this->value;
    }

    public function setValue(TypePrice $value): static
    {
        $this->value = $value;
        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}

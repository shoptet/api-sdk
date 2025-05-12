<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class ShipmentCoDPrice extends Entity
{
    protected TypePriceNullable $value;
    protected string $currencyCode;

    public function getValue(): TypePriceNullable
    {
        return $this->value;
    }

    public function setValue(TypePriceNullable $value): static
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

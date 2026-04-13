<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class DocumentConsumptionTax extends Entity
{
    protected TypeCurrencyCode $currency;
    protected TypePriceNullable $price;

    public function getCurrency(): TypeCurrencyCode
    {
        return $this->currency;
    }

    public function setCurrency(TypeCurrencyCode $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getPrice(): TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }
}

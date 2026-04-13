<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProductPrices;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class PurchasePrice extends Entity
{
    protected TypePriceNullable $price;
    protected TypeVatRate $vatRate;
    protected bool $includingVat;

    public function getPrice(): TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getVatRate(): TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }
}

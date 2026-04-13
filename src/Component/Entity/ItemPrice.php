<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class ItemPrice extends Entity
{
    protected TypePriceNullable $withVat;
    protected TypePriceNullable $withoutVat;
    protected TypePriceNullable $vat;
    protected TypeVatRate $vatRate;

    public function getWithVat(): TypePriceNullable
    {
        return $this->withVat;
    }

    public function setWithVat(TypePriceNullable $withVat): static
    {
        $this->withVat = $withVat;
        return $this;
    }

    public function getWithoutVat(): TypePriceNullable
    {
        return $this->withoutVat;
    }

    public function setWithoutVat(TypePriceNullable $withoutVat): static
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }

    public function getVat(): TypePriceNullable
    {
        return $this->vat;
    }

    public function setVat(TypePriceNullable $vat): static
    {
        $this->vat = $vat;
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
}

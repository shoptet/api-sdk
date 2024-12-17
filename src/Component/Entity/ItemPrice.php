<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class ItemPrice extends Entity
{
    protected TypePrice $withVat;
    protected TypePrice $withoutVat;
    protected TypePrice $vat;
    protected TypeVatRate $vatRate;

    public function getWithVat(): TypePrice
    {
        return $this->withVat;
    }

    public function setWithVat(TypePrice $withVat): static
    {
        $this->withVat = $withVat;
        return $this;
    }

    public function getWithoutVat(): TypePrice
    {
        return $this->withoutVat;
    }

    public function setWithoutVat(TypePrice $withoutVat): static
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }

    public function getVat(): TypePrice
    {
        return $this->vat;
    }

    public function setVat(TypePrice $vat): static
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

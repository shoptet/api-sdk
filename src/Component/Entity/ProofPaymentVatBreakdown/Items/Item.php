<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentVatBreakdown\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class Item extends Entity
{
    protected TypeVatRate $vatRate;
    protected TypePriceNullable $priceWithVat;
    protected TypePriceNullable $priceWithoutVat;
    protected TypePriceNullable $vat;

    public function getVatRate(): TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getPriceWithVat(): TypePriceNullable
    {
        return $this->priceWithVat;
    }

    public function setPriceWithVat(TypePriceNullable $priceWithVat): static
    {
        $this->priceWithVat = $priceWithVat;
        return $this;
    }

    public function getPriceWithoutVat(): TypePriceNullable
    {
        return $this->priceWithoutVat;
    }

    public function setPriceWithoutVat(TypePriceNullable $priceWithoutVat): static
    {
        $this->priceWithoutVat = $priceWithoutVat;
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
}

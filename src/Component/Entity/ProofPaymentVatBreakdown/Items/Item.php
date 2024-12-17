<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentVatBreakdown\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class Item extends Entity
{
    protected TypeVatRate $vatRate;
    protected TypePrice $priceWithVat;
    protected TypePrice $priceWithoutVat;
    protected TypePrice $vat;

    public function getVatRate(): TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getPriceWithVat(): TypePrice
    {
        return $this->priceWithVat;
    }

    public function setPriceWithVat(TypePrice $priceWithVat): static
    {
        $this->priceWithVat = $priceWithVat;
        return $this;
    }

    public function getPriceWithoutVat(): TypePrice
    {
        return $this->priceWithoutVat;
    }

    public function setPriceWithoutVat(TypePrice $priceWithoutVat): static
    {
        $this->priceWithoutVat = $priceWithoutVat;
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
}

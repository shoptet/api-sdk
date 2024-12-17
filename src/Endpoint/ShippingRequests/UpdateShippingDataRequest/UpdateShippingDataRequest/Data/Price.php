<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataRequest\UpdateShippingDataRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class Price extends Entity
{
    protected ?TypePrice $priceWithVat;
    protected ?TypePrice $priceWithoutVat;
    protected ?TypeVatRate $vatRate;

    public function getPriceWithVat(): ?TypePrice
    {
        return $this->priceWithVat;
    }

    public function setPriceWithVat(?TypePrice $priceWithVat): static
    {
        $this->priceWithVat = $priceWithVat;
        return $this;
    }

    public function getPriceWithoutVat(): ?TypePrice
    {
        return $this->priceWithoutVat;
    }

    public function setPriceWithoutVat(?TypePrice $priceWithoutVat): static
    {
        $this->priceWithoutVat = $priceWithoutVat;
        return $this;
    }

    public function getVatRate(): ?TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(?TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }
}

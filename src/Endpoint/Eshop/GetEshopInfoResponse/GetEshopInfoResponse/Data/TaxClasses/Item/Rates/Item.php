<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\TaxClasses\Item\Rates;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class Item extends Entity
{
    protected string $zone;
    protected TypeVatRate $vatRate;

    public function getZone(): string
    {
        return $this->zone;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\Prices;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class PurchasePrice extends Entity
{
    protected ?TypePriceNullable $price;
    protected ?TypePriceNullable $vatRate;
    protected ?bool $includingVat;

    public function getPrice(): ?TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(?TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getVatRate(): ?TypePriceNullable
    {
        return $this->vatRate;
    }

    public function setVatRate(?TypePriceNullable $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getIncludingVat(): ?bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(?bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }
}

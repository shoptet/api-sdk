<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\CreateConsumptionTaxRequest\CreateConsumptionTaxRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Data extends Entity
{
    protected string $name;
    protected TypePrice $price;
    protected string $currency;
    protected ?bool $isVisible;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): TypePrice
    {
        return $this->price;
    }

    public function setPrice(TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(?bool $isVisible): static
    {
        $this->isVisible = $isVisible;
        return $this;
    }
}

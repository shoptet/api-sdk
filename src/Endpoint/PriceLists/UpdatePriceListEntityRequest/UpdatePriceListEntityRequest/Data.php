<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePriceListEntityRequest\UpdatePriceListEntityRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCodeNullable;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePriceListEntityRequest\UpdatePriceListEntityRequest\Data\SalesChannels;

class Data extends Entity
{
    protected ?string $name;
    protected ?TypeCurrencyCodeNullable $currency;
    protected ?SalesChannels $salesChannels;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCurrency(): ?TypeCurrencyCodeNullable
    {
        return $this->currency;
    }

    public function setCurrency(?TypeCurrencyCodeNullable $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getSalesChannels(): ?SalesChannels
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannels $salesChannels): static
    {
        $this->salesChannels = $salesChannels;
        return $this;
    }
}

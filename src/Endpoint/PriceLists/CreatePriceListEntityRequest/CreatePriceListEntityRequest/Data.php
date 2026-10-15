<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePriceListEntityRequest\CreatePriceListEntityRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCodeNullable;

class Data extends Entity
{
    protected string $name;
    protected ?TypeCurrencyCodeNullable $currency;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
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
}

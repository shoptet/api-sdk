<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest\Data\ParamValues;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Item extends Entity
{
    protected string $name;
    protected TypePrice $price;
    protected ?string $valueIndex;
    protected ?int $priority;

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

    public function getValueIndex(): ?string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(?string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }
}

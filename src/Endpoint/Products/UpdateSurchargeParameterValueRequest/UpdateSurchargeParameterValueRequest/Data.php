<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValueRequest\UpdateSurchargeParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class Data extends Entity
{
    protected ?string $name;
    protected ?string $valueIndex;
    protected ?int $priority;
    protected ?TypePriceNullable $price;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
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

    public function getPrice(): ?TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(?TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }
}

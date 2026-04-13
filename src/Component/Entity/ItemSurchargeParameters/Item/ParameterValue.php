<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ItemSurchargeParameters\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class ParameterValue extends Entity
{
    protected ?string $valueIndex;
    protected ?string $description;
    protected ?TypePriceNullable $price;

    public function getValueIndex(): ?string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(?string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
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

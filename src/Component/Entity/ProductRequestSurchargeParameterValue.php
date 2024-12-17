<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ProductRequestSurchargeParameterValue extends Entity
{
    protected string $valueIndex;
    protected ?TypePrice $price;
    protected ?bool $visible;

    public function getValueIndex(): string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }

    public function getPrice(): ?TypePrice
    {
        return $this->price;
    }

    public function setPrice(?TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemRequest\CreateOrderItemRequest\Data\SurchargeParameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Item extends Entity
{
    protected string $parameterCode;
    protected string $valueIndex;
    protected ?TypePrice $price;

    public function getParameterCode(): string
    {
        return $this->parameterCode;
    }

    public function setParameterCode(string $parameterCode): static
    {
        $this->parameterCode = $parameterCode;
        return $this;
    }

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
}

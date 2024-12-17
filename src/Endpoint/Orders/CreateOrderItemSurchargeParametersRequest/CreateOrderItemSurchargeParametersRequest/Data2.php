<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersRequest\CreateOrderItemSurchargeParametersRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Data2 extends Entity
{
    protected string $name;
    protected ?TypePrice $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

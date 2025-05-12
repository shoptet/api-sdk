<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ItemSpecificSurchargeParameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class Item extends Entity
{
    protected string $relationId;
    protected string $name;
    protected TypePriceNullable $price;

    public function getRelationId(): string
    {
        return $this->relationId;
    }

    public function setRelationId(string $relationId): static
    {
        $this->relationId = $relationId;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }
}

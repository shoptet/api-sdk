<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest\Data\Variants\Item\StocksLocations;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;

class Item extends Entity
{
    protected int $stockId;
    protected ?TypeAmount $amount;
    protected ?string $location;

    public function getStockId(): int
    {
        return $this->stockId;
    }

    public function setStockId(int $stockId): static
    {
        $this->stockId = $stockId;
        return $this;
    }

    public function getAmount(): ?TypeAmount
    {
        return $this->amount;
    }

    public function setAmount(?TypeAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductRequest\UpdateProductRequest\Data\Variants\Item\StocksLocations;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $stockId;
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

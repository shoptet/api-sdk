<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\PerStockAmounts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Item extends Entity
{
    protected int $stockId;
    protected TypeAmountNullable $amount;
    protected TypeAmountNullable $claim;
    protected ?string $location;
    protected TypeDateTimeNullable $lastAmountUpdate;

    public function getStockId(): int
    {
        return $this->stockId;
    }

    public function setStockId(int $stockId): static
    {
        $this->stockId = $stockId;
        return $this;
    }

    public function getAmount(): TypeAmountNullable
    {
        return $this->amount;
    }

    public function setAmount(TypeAmountNullable $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getClaim(): TypeAmountNullable
    {
        return $this->claim;
    }

    public function setClaim(TypeAmountNullable $claim): static
    {
        $this->claim = $claim;
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

    public function getLastAmountUpdate(): TypeDateTimeNullable
    {
        return $this->lastAmountUpdate;
    }

    public function setLastAmountUpdate(TypeDateTimeNullable $lastAmountUpdate): static
    {
        $this->lastAmountUpdate = $lastAmountUpdate;
        return $this;
    }
}

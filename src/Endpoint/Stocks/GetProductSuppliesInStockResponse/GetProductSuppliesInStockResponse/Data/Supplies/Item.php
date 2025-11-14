<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStockResponse\GetProductSuppliesInStockResponse\Data\Supplies;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected TypeGuidUnlimited $productGuid;
    protected string $code;
    protected TypeAmountNullable $amount;
    protected TypeAmountNullable $claim;
    protected ?string $location;
    protected ?TypeDateTimeNullable $changeTime;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function getChangeTime(): ?TypeDateTimeNullable
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTimeNullable $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }
}

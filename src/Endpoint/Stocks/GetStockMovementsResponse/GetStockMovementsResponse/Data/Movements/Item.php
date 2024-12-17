<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsResponse\GetStockMovementsResponse\Data\Movements;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected int $id;
    protected string $productCode;
    protected TypeAmount $actualAmount;
    protected TypeAmount $amountChange;
    protected ?string $changedBy;
    protected ?TypeDateTime $changeTime;
    protected ?string $orderCode;
    protected ?TypeGuidUnlimited $productGuid;
    protected ?TypeAmount $sumAmount;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getActualAmount(): TypeAmount
    {
        return $this->actualAmount;
    }

    public function setActualAmount(TypeAmount $actualAmount): static
    {
        $this->actualAmount = $actualAmount;
        return $this;
    }

    public function getAmountChange(): TypeAmount
    {
        return $this->amountChange;
    }

    public function setAmountChange(TypeAmount $amountChange): static
    {
        $this->amountChange = $amountChange;
        return $this;
    }

    public function getChangedBy(): ?string
    {
        return $this->changedBy;
    }

    public function setChangedBy(?string $changedBy): static
    {
        $this->changedBy = $changedBy;
        return $this;
    }

    public function getChangeTime(): ?TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getProductGuid(): ?TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getSumAmount(): ?TypeAmount
    {
        return $this->sumAmount;
    }

    public function setSumAmount(?TypeAmount $sumAmount): static
    {
        $this->sumAmount = $sumAmount;
        return $this;
    }
}

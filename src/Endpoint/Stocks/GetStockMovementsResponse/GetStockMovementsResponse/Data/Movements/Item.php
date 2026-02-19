<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsResponse\GetStockMovementsResponse\Data\Movements;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected int $id;
    protected string $productCode;
    protected TypeAmountNullable $actualAmount;
    protected TypeAmountNullable $amountChange;
    protected ?string $changedBy;
    protected TypeDateTimeNullable $changeTime;
    protected ?string $orderCode;
    protected ?TypeGuidUnlimited $productGuid;
    protected ?TypeGuidUnlimited $historicalProductGuid;
    protected ?TypeAmountNullable $sumAmount;

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

    public function getActualAmount(): TypeAmountNullable
    {
        return $this->actualAmount;
    }

    public function setActualAmount(TypeAmountNullable $actualAmount): static
    {
        $this->actualAmount = $actualAmount;
        return $this;
    }

    public function getAmountChange(): TypeAmountNullable
    {
        return $this->amountChange;
    }

    public function setAmountChange(TypeAmountNullable $amountChange): static
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

    public function getChangeTime(): TypeDateTimeNullable
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTimeNullable $changeTime): static
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

    public function getHistoricalProductGuid(): ?TypeGuidUnlimited
    {
        return $this->historicalProductGuid;
    }

    public function setHistoricalProductGuid(?TypeGuidUnlimited $historicalProductGuid): static
    {
        $this->historicalProductGuid = $historicalProductGuid;
        return $this;
    }

    public function getSumAmount(): ?TypeAmountNullable
    {
        return $this->sumAmount;
    }

    public function setSumAmount(?TypeAmountNullable $sumAmount): static
    {
        $this->sumAmount = $sumAmount;
        return $this;
    }
}

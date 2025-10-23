<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class MeasureUnit extends Entity
{
    protected ?int $packagingUnitId;
    protected ?string $packagingUnitName;
    protected TypeAmountNullable $packagingAmount;
    protected ?int $measureUnitId;
    protected ?string $measureUnitName;
    protected TypeAmountNullable $measureAmount;
    protected TypePriceNullable $measurePrice;

    public function getPackagingUnitId(): ?int
    {
        return $this->packagingUnitId;
    }

    public function setPackagingUnitId(?int $packagingUnitId): static
    {
        $this->packagingUnitId = $packagingUnitId;
        return $this;
    }

    public function getPackagingUnitName(): ?string
    {
        return $this->packagingUnitName;
    }

    public function setPackagingUnitName(?string $packagingUnitName): static
    {
        $this->packagingUnitName = $packagingUnitName;
        return $this;
    }

    public function getPackagingAmount(): TypeAmountNullable
    {
        return $this->packagingAmount;
    }

    public function setPackagingAmount(TypeAmountNullable $packagingAmount): static
    {
        $this->packagingAmount = $packagingAmount;
        return $this;
    }

    public function getMeasureUnitId(): ?int
    {
        return $this->measureUnitId;
    }

    public function setMeasureUnitId(?int $measureUnitId): static
    {
        $this->measureUnitId = $measureUnitId;
        return $this;
    }

    public function getMeasureUnitName(): ?string
    {
        return $this->measureUnitName;
    }

    public function setMeasureUnitName(?string $measureUnitName): static
    {
        $this->measureUnitName = $measureUnitName;
        return $this;
    }

    public function getMeasureAmount(): TypeAmountNullable
    {
        return $this->measureAmount;
    }

    public function setMeasureAmount(TypeAmountNullable $measureAmount): static
    {
        $this->measureAmount = $measureAmount;
        return $this;
    }

    public function getMeasurePrice(): TypePriceNullable
    {
        return $this->measurePrice;
    }

    public function setMeasurePrice(TypePriceNullable $measurePrice): static
    {
        $this->measurePrice = $measurePrice;
        return $this;
    }
}

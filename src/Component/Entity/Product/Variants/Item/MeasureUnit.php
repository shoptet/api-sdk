<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class MeasureUnit extends Entity
{
    protected ?int $packagingUnitId;
    protected ?string $packagingUnitName;
    protected TypeAmount $packagingAmount;
    protected ?int $measureUnitId;
    protected ?string $measureUnitName;
    protected TypeAmount $measureAmount;
    protected TypePrice $measurePrice;

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

    public function getPackagingAmount(): TypeAmount
    {
        return $this->packagingAmount;
    }

    public function setPackagingAmount(TypeAmount $packagingAmount): static
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

    public function getMeasureAmount(): TypeAmount
    {
        return $this->measureAmount;
    }

    public function setMeasureAmount(TypeAmount $measureAmount): static
    {
        $this->measureAmount = $measureAmount;
        return $this;
    }

    public function getMeasurePrice(): TypePrice
    {
        return $this->measurePrice;
    }

    public function setMeasurePrice(TypePrice $measurePrice): static
    {
        $this->measurePrice = $measurePrice;
        return $this;
    }
}

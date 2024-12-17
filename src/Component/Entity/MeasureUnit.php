<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;

class MeasureUnit extends Entity
{
    protected ?int $packagingUnitId;
    protected TypePositiveAmount $packagingAmount;
    protected ?int $measureUnitId;
    protected TypePositiveAmount $measureAmount;

    public function getPackagingUnitId(): ?int
    {
        return $this->packagingUnitId;
    }

    public function setPackagingUnitId(?int $packagingUnitId): static
    {
        $this->packagingUnitId = $packagingUnitId;
        return $this;
    }

    public function getPackagingAmount(): TypePositiveAmount
    {
        return $this->packagingAmount;
    }

    public function setPackagingAmount(TypePositiveAmount $packagingAmount): static
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

    public function getMeasureAmount(): TypePositiveAmount
    {
        return $this->measureAmount;
    }

    public function setMeasureAmount(TypePositiveAmount $measureAmount): static
    {
        $this->measureAmount = $measureAmount;
        return $this;
    }
}

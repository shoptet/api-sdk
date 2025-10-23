<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;

class MeasureUnit extends Entity
{
    protected ?int $packagingUnitId;
    protected TypePositiveAmountNullable $packagingAmount;
    protected ?int $measureUnitId;
    protected TypePositiveAmountNullable $measureAmount;

    public function getPackagingUnitId(): ?int
    {
        return $this->packagingUnitId;
    }

    public function setPackagingUnitId(?int $packagingUnitId): static
    {
        $this->packagingUnitId = $packagingUnitId;
        return $this;
    }

    public function getPackagingAmount(): TypePositiveAmountNullable
    {
        return $this->packagingAmount;
    }

    public function setPackagingAmount(TypePositiveAmountNullable $packagingAmount): static
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

    public function getMeasureAmount(): TypePositiveAmountNullable
    {
        return $this->measureAmount;
    }

    public function setMeasureAmount(TypePositiveAmountNullable $measureAmount): static
    {
        $this->measureAmount = $measureAmount;
        return $this;
    }
}

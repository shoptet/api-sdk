<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnitsResponse\GetListOfProductsMeasureUnitsResponse\Data\MeasureUnits\Item\Ratios;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeUnitRatio;

class Item extends Entity
{
    protected int $unitId;
    protected TypeUnitRatio $ratio;

    public function getUnitId(): int
    {
        return $this->unitId;
    }

    public function setUnitId(int $unitId): static
    {
        $this->unitId = $unitId;
        return $this;
    }

    public function getRatio(): TypeUnitRatio
    {
        return $this->ratio;
    }

    public function setRatio(TypeUnitRatio $ratio): static
    {
        $this->ratio = $ratio;
        return $this;
    }
}

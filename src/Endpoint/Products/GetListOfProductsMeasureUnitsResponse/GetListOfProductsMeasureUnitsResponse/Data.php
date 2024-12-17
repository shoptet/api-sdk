<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnitsResponse\GetListOfProductsMeasureUnitsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnitsResponse\GetListOfProductsMeasureUnitsResponse\Data\MeasureUnits;

class Data extends Entity
{
    protected MeasureUnits $measureUnits;

    public function getMeasureUnits(): MeasureUnits
    {
        return $this->measureUnits;
    }

    public function setMeasureUnits(MeasureUnits $measureUnits): static
    {
        $this->measureUnits = $measureUnits;
        return $this;
    }
}

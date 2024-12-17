<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductUnitsResponse\GetListOfProductUnitsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductUnitsResponse\GetListOfProductUnitsResponse\Data\Units;

class Data extends Entity
{
    protected Units $units;

    public function getUnits(): Units
    {
        return $this->units;
    }

    public function setUnits(Units $units): static
    {
        $this->units = $units;
        return $this;
    }
}

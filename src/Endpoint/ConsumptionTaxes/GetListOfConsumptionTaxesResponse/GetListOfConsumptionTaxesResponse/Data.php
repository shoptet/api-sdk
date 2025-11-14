<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\GetListOfConsumptionTaxesResponse\GetListOfConsumptionTaxesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\GetListOfConsumptionTaxesResponse\GetListOfConsumptionTaxesResponse\Data\ConsumptionTaxes;

class Data extends Entity
{
    protected ConsumptionTaxes $consumptionTaxes;

    public function getConsumptionTaxes(): ConsumptionTaxes
    {
        return $this->consumptionTaxes;
    }

    public function setConsumptionTaxes(ConsumptionTaxes $consumptionTaxes): static
    {
        $this->consumptionTaxes = $consumptionTaxes;
        return $this;
    }
}

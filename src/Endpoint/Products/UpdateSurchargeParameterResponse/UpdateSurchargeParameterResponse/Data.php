<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterResponse\UpdateSurchargeParameterResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterResponse\UpdateSurchargeParameterResponse\Data\SurchargeParameter;

class Data extends Entity
{
    protected SurchargeParameter $surchargeParameter;

    public function getSurchargeParameter(): SurchargeParameter
    {
        return $this->surchargeParameter;
    }

    public function setSurchargeParameter(SurchargeParameter $surchargeParameter): static
    {
        $this->surchargeParameter = $surchargeParameter;
        return $this;
    }
}

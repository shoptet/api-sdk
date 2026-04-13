<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterValueResponse\UpdateSurchargeParameterValueResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterValueResponse\UpdateSurchargeParameterValueResponse\Data\SurchargeParameter;

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

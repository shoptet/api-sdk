<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest\Data\ParamValues;

class Data extends Entity
{
    protected ParamValues $paramValues;

    public function getParamValues(): ParamValues
    {
        return $this->paramValues;
    }

    public function setParamValues(ParamValues $paramValues): static
    {
        $this->paramValues = $paramValues;
        return $this;
    }
}

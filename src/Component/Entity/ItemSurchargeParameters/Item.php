<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ItemSurchargeParameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ItemSurchargeParameters\Item\ParameterName;
use Shoptet\Api\Sdk\Php\Component\Entity\ItemSurchargeParameters\Item\ParameterValue;

class Item extends Entity
{
    protected ?ParameterName $parameterName;
    protected ?ParameterValue $parameterValue;

    public function getParameterName(): ?ParameterName
    {
        return $this->parameterName;
    }

    public function setParameterName(?ParameterName $parameterName): static
    {
        $this->parameterName = $parameterName;
        return $this;
    }

    public function getParameterValue(): ?ParameterValue
    {
        return $this->parameterValue;
    }

    public function setParameterValue(?ParameterValue $parameterValue): static
    {
        $this->parameterValue = $parameterValue;
        return $this;
    }
}

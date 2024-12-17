<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterValueRequest\CreateFilteringParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductFilteringParameterValues;

class Data extends Entity
{
    protected ProductFilteringParameterValues $paramValues;

    public function getParamValues(): ProductFilteringParameterValues
    {
        return $this->paramValues;
    }

    public function setParamValues(ProductFilteringParameterValues $paramValues): static
    {
        $this->paramValues = $paramValues;
        return $this;
    }
}

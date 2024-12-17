<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterValueRequest\CreateVariantParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductVariantParameterValues;

class Data extends Entity
{
    protected ProductVariantParameterValues $paramValues;

    public function getParamValues(): ProductVariantParameterValues
    {
        return $this->paramValues;
    }

    public function setParamValues(ProductVariantParameterValues $paramValues): static
    {
        $this->paramValues = $paramValues;
        return $this;
    }
}

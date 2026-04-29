<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryDefinitionRequest\CreateParametricCategoryDefinitionRequest\Data\Parameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $parameterCode;

    public function getParameterCode(): string
    {
        return $this->parameterCode;
    }

    public function setParameterCode(string $parameterCode): static
    {
        $this->parameterCode = $parameterCode;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryDefinitionRequest\CreateParametricCategoryDefinitionRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryDefinitionRequest\CreateParametricCategoryDefinitionRequest\Data\Parameters;

class Data extends Entity
{
    protected TypeGuid $categoryGuid;
    protected Parameters $parameters;

    public function getCategoryGuid(): TypeGuid
    {
        return $this->categoryGuid;
    }

    public function setCategoryGuid(TypeGuid $categoryGuid): static
    {
        $this->categoryGuid = $categoryGuid;
        return $this;
    }

    public function getParameters(): Parameters
    {
        return $this->parameters;
    }

    public function setParameters(Parameters $parameters): static
    {
        $this->parameters = $parameters;
        return $this;
    }
}

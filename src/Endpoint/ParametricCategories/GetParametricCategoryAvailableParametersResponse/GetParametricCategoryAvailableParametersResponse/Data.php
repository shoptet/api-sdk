<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\GetParametricCategoryAvailableParametersResponse\GetParametricCategoryAvailableParametersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\GetParametricCategoryAvailableParametersResponse\GetParametricCategoryAvailableParametersResponse\Data\Parameters;

class Data extends Entity
{
    protected string $categoryGuid;
    protected string $categoryName;
    protected Parameters $parameters;

    public function getCategoryGuid(): string
    {
        return $this->categoryGuid;
    }

    public function setCategoryGuid(string $categoryGuid): static
    {
        $this->categoryGuid = $categoryGuid;
        return $this;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): static
    {
        $this->categoryName = $categoryName;
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

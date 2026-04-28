<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\GetParametricCategoryAvailableParametersResponse\GetParametricCategoryAvailableParametersResponse\Data\Parameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $parameterCode;
    protected string $parameterName;
    protected string $parameterType;

    public function getParameterCode(): string
    {
        return $this->parameterCode;
    }

    public function setParameterCode(string $parameterCode): static
    {
        $this->parameterCode = $parameterCode;
        return $this;
    }

    public function getParameterName(): string
    {
        return $this->parameterName;
    }

    public function setParameterName(string $parameterName): static
    {
        $this->parameterName = $parameterName;
        return $this;
    }

    public function getParameterType(): string
    {
        return $this->parameterType;
    }

    public function setParameterType(string $parameterType): static
    {
        $this->parameterType = $parameterType;
        return $this;
    }
}

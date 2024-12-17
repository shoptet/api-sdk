<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ParameterValueCombinations extends Entity
{
    protected string $parameterCode;
    protected string $parameterName;
    protected string $valueCode;
    protected string $valueName;

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

    public function getValueCode(): string
    {
        return $this->valueCode;
    }

    public function setValueCode(string $valueCode): static
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    public function getValueName(): string
    {
        return $this->valueName;
    }

    public function setValueName(string $valueName): static
    {
        $this->valueName = $valueName;
        return $this;
    }
}

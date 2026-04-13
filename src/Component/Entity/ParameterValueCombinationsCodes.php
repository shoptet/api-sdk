<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ParameterValueCombinationsCodes extends Entity
{
    protected string $parameterCode;
    protected string $valueCode;

    public function getParameterCode(): string
    {
        return $this->parameterCode;
    }

    public function setParameterCode(string $parameterCode): static
    {
        $this->parameterCode = $parameterCode;
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
}

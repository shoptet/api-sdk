<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterRequest\CreateVariantParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductVariantParameterValues;

class Data extends Entity
{
    protected string $paramName;
    protected ?string $paramIndex;
    protected ?int $priority;
    protected ?ProductVariantParameterValues $values;

    public function getParamName(): string
    {
        return $this->paramName;
    }

    public function setParamName(string $paramName): static
    {
        $this->paramName = $paramName;
        return $this;
    }

    public function getParamIndex(): ?string
    {
        return $this->paramIndex;
    }

    public function setParamIndex(?string $paramIndex): static
    {
        $this->paramIndex = $paramIndex;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getValues(): ?ProductVariantParameterValues
    {
        return $this->values;
    }

    public function setValues(?ProductVariantParameterValues $values): static
    {
        $this->values = $values;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterRequest\UpdateVariantParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?string $paramName;
    protected ?string $paramIndex;
    protected ?int $priority;

    public function getParamName(): ?string
    {
        return $this->paramName;
    }

    public function setParamName(?string $paramName): static
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
}

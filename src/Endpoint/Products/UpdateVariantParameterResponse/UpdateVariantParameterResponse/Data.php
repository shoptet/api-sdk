<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterResponse\UpdateVariantParameterResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterResponse\UpdateVariantParameterResponse\Data\Values;

class Data extends Entity
{
    protected int $id;
    protected ?string $paramName;
    protected string $paramIndex;
    protected ?int $priority;
    protected ?Values $values;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getParamName(): ?string
    {
        return $this->paramName;
    }

    public function setParamName(?string $paramName): static
    {
        $this->paramName = $paramName;
        return $this;
    }

    public function getParamIndex(): string
    {
        return $this->paramIndex;
    }

    public function setParamIndex(string $paramIndex): static
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

    public function getValues(): ?Values
    {
        return $this->values;
    }

    public function setValues(?Values $values): static
    {
        $this->values = $values;
        return $this;
    }
}

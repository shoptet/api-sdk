<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\Parameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected ?string $paramName;
    protected string $paramIndex;
    protected string $paramValue;
    protected ?string $rawValue;
    protected ?string $color;
    protected ?string $image;
    protected float $valuePriority;

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

    public function getParamValue(): string
    {
        return $this->paramValue;
    }

    public function setParamValue(string $paramValue): static
    {
        $this->paramValue = $paramValue;
        return $this;
    }

    public function getRawValue(): ?string
    {
        return $this->rawValue;
    }

    public function setRawValue(?string $rawValue): static
    {
        $this->rawValue = $rawValue;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getValuePriority(): float
    {
        return $this->valuePriority;
    }

    public function setValuePriority(float $valuePriority): static
    {
        $this->valuePriority = $valuePriority;
        return $this;
    }
}

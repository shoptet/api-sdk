<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterValueRequest\UpdateVariantParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;

class Data extends Entity
{
    protected ?string $paramValue;
    protected ?string $rawValue;
    protected ?TypeColor $color;
    protected ?string $image;
    protected ?int $valuePriority;

    public function getParamValue(): ?string
    {
        return $this->paramValue;
    }

    public function setParamValue(?string $paramValue): static
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

    public function getColor(): ?TypeColor
    {
        return $this->color;
    }

    public function setColor(?TypeColor $color): static
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

    public function getValuePriority(): ?int
    {
        return $this->valuePriority;
    }

    public function setValuePriority(?int $valuePriority): static
    {
        $this->valuePriority = $valuePriority;
        return $this;
    }
}

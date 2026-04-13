<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ProductVariantParameterValue extends Entity
{
    protected int $id;
    protected string $paramValue;
    protected string $rawValue;
    protected ?string $color;
    protected ?string $image;
    protected ?int $valuePriority;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getRawValue(): string
    {
        return $this->rawValue;
    }

    public function setRawValue(string $rawValue): static
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

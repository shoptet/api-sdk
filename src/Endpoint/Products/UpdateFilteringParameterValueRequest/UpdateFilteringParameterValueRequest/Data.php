<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterValueRequest\UpdateFilteringParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;

class Data extends Entity
{
    protected ?string $name;
    protected ?string $valueIndex;
    protected ?int $priority;
    protected ?TypeColor $color;
    protected ?string $image;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getValueIndex(): ?string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(?string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
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
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterRequest\CreateFilteringParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductFilteringParameterValues;

class Data extends Entity
{
    protected string $name;
    protected ?string $code;
    protected ?string $displayName;
    protected ?string $description;
    protected ?int $priority;
    protected ?string $googleMapping;
    protected ProductFilteringParameterValues $values;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): static
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
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

    public function getGoogleMapping(): ?string
    {
        return $this->googleMapping;
    }

    public function setGoogleMapping(?string $googleMapping): static
    {
        $this->googleMapping = $googleMapping;
        return $this;
    }

    public function getValues(): ProductFilteringParameterValues
    {
        return $this->values;
    }

    public function setValues(ProductFilteringParameterValues $values): static
    {
        $this->values = $values;
        return $this;
    }
}

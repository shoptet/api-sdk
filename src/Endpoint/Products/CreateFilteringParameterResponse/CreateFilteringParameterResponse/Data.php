<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterResponse\CreateFilteringParameterResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\GoogleMappingType;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterResponse\CreateFilteringParameterResponse\Data\Values;

class Data extends Entity
{
    protected int $id;
    protected string $code;
    protected string $name;
    protected ?string $displayName;
    protected ?string $description;
    protected ?int $priority;
    protected GoogleMappingType $googleMapping;
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

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

    public function getGoogleMapping(): GoogleMappingType
    {
        return $this->googleMapping;
    }

    public function setGoogleMapping(GoogleMappingType $googleMapping): static
    {
        $this->googleMapping = $googleMapping;
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

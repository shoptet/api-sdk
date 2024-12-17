<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterResponse\UpdateSurchargeParameterResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\GoogleMappingType;

class SurchargeParameter extends Entity
{
    protected int $id;
    protected string $code;
    protected string $name;
    protected ?string $displayName;
    protected ?string $description;
    protected ?int $priority;
    protected bool $required;
    protected string $currency;
    protected bool $includingVat;
    protected GoogleMappingType $googleMapping;

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

    public function isRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): static
    {
        $this->required = $required;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(bool $includingVat): static
    {
        $this->includingVat = $includingVat;
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
}

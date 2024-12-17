<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterRequest\CreateSurchargeParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterRequest\CreateSurchargeParameterRequest\Data\Values;

class Data extends Entity
{
    protected ?TypeCurrencyCode $currency;
    protected ?string $displayName;
    protected string $name;
    protected ?string $code;
    protected ?string $description;
    protected ?bool $required;
    protected ?bool $includingVat;
    protected ?int $priority;
    protected ?string $googleMapping;
    protected Values $values;

    public function getCurrency(): ?TypeCurrencyCode
    {
        return $this->currency;
    }

    public function setCurrency(?TypeCurrencyCode $currency): static
    {
        $this->currency = $currency;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): static
    {
        $this->required = $required;
        return $this;
    }

    public function getIncludingVat(): ?bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(?bool $includingVat): static
    {
        $this->includingVat = $includingVat;
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

    public function getValues(): Values
    {
        return $this->values;
    }

    public function setValues(Values $values): static
    {
        $this->values = $values;
        return $this;
    }
}

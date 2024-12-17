<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterRequest\UpdateFilteringParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?string $name;
    protected ?string $code;
    protected ?string $displayName;
    protected ?string $description;
    protected ?int $priority;
    protected ?string $googleMapping;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
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
}

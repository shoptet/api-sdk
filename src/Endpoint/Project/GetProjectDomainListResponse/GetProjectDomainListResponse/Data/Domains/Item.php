<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectDomainListResponse\GetProjectDomainListResponse\Data\Domains;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected string $name;
    protected string $status;
    protected string $domain;
    protected ?bool $isPrimary;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): static
    {
        $this->domain = $domain;
        return $this;
    }

    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(?bool $isPrimary): static
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetListOfOnlineStoresResponse\GetListOfOnlineStoresResponse\Data\OnlineStores;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\OnlineStoreCountry;

class Item extends Entity
{
    protected int $id;
    protected string $status;
    protected ?string $domain;
    protected string $timezone;
    protected ?OnlineStoreCountry $defaultCountry;
    protected bool $isPasswordProtected;
    protected bool $isPrimary;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): static
    {
        $this->domain = $domain;
        return $this;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): static
    {
        $this->timezone = $timezone;
        return $this;
    }

    public function getDefaultCountry(): ?OnlineStoreCountry
    {
        return $this->defaultCountry;
    }

    public function setDefaultCountry(?OnlineStoreCountry $defaultCountry): static
    {
        $this->defaultCountry = $defaultCountry;
        return $this;
    }

    public function isIsPasswordProtected(): bool
    {
        return $this->isPasswordProtected;
    }

    public function setIsPasswordProtected(bool $isPasswordProtected): static
    {
        $this->isPasswordProtected = $isPasswordProtected;
        return $this;
    }

    public function isIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): static
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }
}

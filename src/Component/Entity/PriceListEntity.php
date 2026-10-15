<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\PriceListEntity\CustomerGroups;
use Shoptet\Api\Sdk\Php\Component\Entity\PriceListEntity\SalesChannels;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCodeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;

class PriceListEntity extends Entity
{
    protected int $id;
    protected TypeGuidNullable $guid;
    protected string $name;
    protected TypeCurrencyCodeNullable $currency;
    protected bool $isDefault;
    protected SalesChannels $salesChannels;
    protected CustomerGroups $customerGroups;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getGuid(): TypeGuidNullable
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidNullable $guid): static
    {
        $this->guid = $guid;
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

    public function getCurrency(): TypeCurrencyCodeNullable
    {
        return $this->currency;
    }

    public function setCurrency(TypeCurrencyCodeNullable $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function isIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): static
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getSalesChannels(): SalesChannels
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(SalesChannels $salesChannels): static
    {
        $this->salesChannels = $salesChannels;
        return $this;
    }

    public function getCustomerGroups(): CustomerGroups
    {
        return $this->customerGroups;
    }

    public function setCustomerGroups(CustomerGroups $customerGroups): static
    {
        $this->customerGroups = $customerGroups;
        return $this;
    }
}

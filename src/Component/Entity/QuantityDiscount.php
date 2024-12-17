<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\QuantityDiscount\CustomerGroups;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;

class QuantityDiscount extends Entity
{
    protected int $id;
    protected string $title;
    protected TypeDate $validFrom;
    protected TypeDate $validTo;
    protected bool $timeUnlimited;
    protected ?CustomerGroups $customerGroups;
    protected bool $displayFlag;
    protected ?TypeColor $flagColor;
    protected ?int $priority;
    protected bool $isActive;
    protected string $status;
    protected string $targetingLevel;
    protected QuantityDiscountTargetingResponse $targeting;
    protected bool $includeUnregisteredCustomers;
    protected QuantityDiscountSettingsResponse $settings;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getValidFrom(): TypeDate
    {
        return $this->validFrom;
    }

    public function setValidFrom(TypeDate $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidTo(): TypeDate
    {
        return $this->validTo;
    }

    public function setValidTo(TypeDate $validTo): static
    {
        $this->validTo = $validTo;
        return $this;
    }

    public function isTimeUnlimited(): bool
    {
        return $this->timeUnlimited;
    }

    public function setTimeUnlimited(bool $timeUnlimited): static
    {
        $this->timeUnlimited = $timeUnlimited;
        return $this;
    }

    public function getCustomerGroups(): ?CustomerGroups
    {
        return $this->customerGroups;
    }

    public function setCustomerGroups(?CustomerGroups $customerGroups): static
    {
        $this->customerGroups = $customerGroups;
        return $this;
    }

    public function isDisplayFlag(): bool
    {
        return $this->displayFlag;
    }

    public function setDisplayFlag(bool $displayFlag): static
    {
        $this->displayFlag = $displayFlag;
        return $this;
    }

    public function getFlagColor(): ?TypeColor
    {
        return $this->flagColor;
    }

    public function setFlagColor(?TypeColor $flagColor): static
    {
        $this->flagColor = $flagColor;
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

    public function isIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
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

    public function getTargetingLevel(): string
    {
        return $this->targetingLevel;
    }

    public function setTargetingLevel(string $targetingLevel): static
    {
        $this->targetingLevel = $targetingLevel;
        return $this;
    }

    public function getTargeting(): QuantityDiscountTargetingResponse
    {
        return $this->targeting;
    }

    public function setTargeting(QuantityDiscountTargetingResponse $targeting): static
    {
        $this->targeting = $targeting;
        return $this;
    }

    public function isIncludeUnregisteredCustomers(): bool
    {
        return $this->includeUnregisteredCustomers;
    }

    public function setIncludeUnregisteredCustomers(bool $includeUnregisteredCustomers): static
    {
        $this->includeUnregisteredCustomers = $includeUnregisteredCustomers;
        return $this;
    }

    public function getSettings(): QuantityDiscountSettingsResponse
    {
        return $this->settings;
    }

    public function setSettings(QuantityDiscountSettingsResponse $settings): static
    {
        $this->settings = $settings;
        return $this;
    }
}

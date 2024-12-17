<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountRequest\UpdateQuantityDiscountRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountRequest\UpdateQuantityDiscountRequest\Data\CustomerGroupCodes;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountRequest\UpdateQuantityDiscountRequest\Data\Settings;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountRequest\UpdateQuantityDiscountRequest\Data\Targeting;

class Data extends Entity
{
    protected ?string $title;
    protected ?bool $isActive;
    protected ?TypeDate $validFrom;
    protected ?TypeDate $validTo;
    protected ?bool $displayFlag;
    protected ?TypeColor $flagColor;
    protected ?CustomerGroupCodes $customerGroupCodes;
    protected ?bool $includeUnregisteredCustomers;
    protected ?string $targetingLevel;
    protected ?Targeting $targeting;
    protected ?Settings $settings;
    protected ?int $sortBefore;
    protected ?int $sortAfter;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getValidFrom(): ?TypeDate
    {
        return $this->validFrom;
    }

    public function setValidFrom(?TypeDate $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidTo(): ?TypeDate
    {
        return $this->validTo;
    }

    public function setValidTo(?TypeDate $validTo): static
    {
        $this->validTo = $validTo;
        return $this;
    }

    public function getDisplayFlag(): ?bool
    {
        return $this->displayFlag;
    }

    public function setDisplayFlag(?bool $displayFlag): static
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

    public function getCustomerGroupCodes(): ?CustomerGroupCodes
    {
        return $this->customerGroupCodes;
    }

    public function setCustomerGroupCodes(?CustomerGroupCodes $customerGroupCodes): static
    {
        $this->customerGroupCodes = $customerGroupCodes;
        return $this;
    }

    public function getIncludeUnregisteredCustomers(): ?bool
    {
        return $this->includeUnregisteredCustomers;
    }

    public function setIncludeUnregisteredCustomers(?bool $includeUnregisteredCustomers): static
    {
        $this->includeUnregisteredCustomers = $includeUnregisteredCustomers;
        return $this;
    }

    public function getTargetingLevel(): ?string
    {
        return $this->targetingLevel;
    }

    public function setTargetingLevel(?string $targetingLevel): static
    {
        $this->targetingLevel = $targetingLevel;
        return $this;
    }

    public function getTargeting(): ?Targeting
    {
        return $this->targeting;
    }

    public function setTargeting(?Targeting $targeting): static
    {
        $this->targeting = $targeting;
        return $this;
    }

    public function getSettings(): ?Settings
    {
        return $this->settings;
    }

    public function setSettings(?Settings $settings): static
    {
        $this->settings = $settings;
        return $this;
    }

    public function getSortBefore(): ?int
    {
        return $this->sortBefore;
    }

    public function setSortBefore(?int $sortBefore): static
    {
        $this->sortBefore = $sortBefore;
        return $this;
    }

    public function getSortAfter(): ?int
    {
        return $this->sortAfter;
    }

    public function setSortAfter(?int $sortAfter): static
    {
        $this->sortAfter = $sortAfter;
        return $this;
    }
}

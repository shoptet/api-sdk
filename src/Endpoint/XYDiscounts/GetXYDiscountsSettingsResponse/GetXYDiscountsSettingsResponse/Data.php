<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetXYDiscountsSettingsResponse\GetXYDiscountsSettingsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected bool $combineWithLoyaltyDiscounts;
    protected bool $combineWithVolumeDiscounts;
    protected bool $combineWithQuantityDiscounts;
    protected bool $enableMultipleDiscounts;
    protected string $categoryTargeting;
    protected ?bool $enableInCashdesk;

    public function isCombineWithLoyaltyDiscounts(): bool
    {
        return $this->combineWithLoyaltyDiscounts;
    }

    public function setCombineWithLoyaltyDiscounts(bool $combineWithLoyaltyDiscounts): static
    {
        $this->combineWithLoyaltyDiscounts = $combineWithLoyaltyDiscounts;
        return $this;
    }

    public function isCombineWithVolumeDiscounts(): bool
    {
        return $this->combineWithVolumeDiscounts;
    }

    public function setCombineWithVolumeDiscounts(bool $combineWithVolumeDiscounts): static
    {
        $this->combineWithVolumeDiscounts = $combineWithVolumeDiscounts;
        return $this;
    }

    public function isCombineWithQuantityDiscounts(): bool
    {
        return $this->combineWithQuantityDiscounts;
    }

    public function setCombineWithQuantityDiscounts(bool $combineWithQuantityDiscounts): static
    {
        $this->combineWithQuantityDiscounts = $combineWithQuantityDiscounts;
        return $this;
    }

    public function isEnableMultipleDiscounts(): bool
    {
        return $this->enableMultipleDiscounts;
    }

    public function setEnableMultipleDiscounts(bool $enableMultipleDiscounts): static
    {
        $this->enableMultipleDiscounts = $enableMultipleDiscounts;
        return $this;
    }

    public function getCategoryTargeting(): string
    {
        return $this->categoryTargeting;
    }

    public function setCategoryTargeting(string $categoryTargeting): static
    {
        $this->categoryTargeting = $categoryTargeting;
        return $this;
    }

    public function getEnableInCashdesk(): ?bool
    {
        return $this->enableInCashdesk;
    }

    public function setEnableInCashdesk(?bool $enableInCashdesk): static
    {
        $this->enableInCashdesk = $enableInCashdesk;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\XyDiscount\CustomerGroups;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;

class XyDiscount extends Entity
{
    protected int $id;
    protected string $title;
    protected TypeDate $validFrom;
    protected TypeDate $validTo;
    protected ?CustomerGroups $customerGroups;
    protected TypeAmount $xAmount;
    protected TypeAmount $yAmount;
    protected ?string $description;
    protected ?string $termsAndConditionsUrl;
    protected bool $displayFlag;
    protected ?TypeColor $flagColor;
    protected bool $displayBanner;
    protected ?TypeColor $bannerColor;
    protected ?int $priority;
    protected ?int $usageCount;
    protected XyDiscountTargetingResponse $xTargeting;
    protected XyDiscountTargetingResponse $yTargeting;
    protected bool $includeUnregisteredCustomers;

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

    public function getCustomerGroups(): ?CustomerGroups
    {
        return $this->customerGroups;
    }

    public function setCustomerGroups(?CustomerGroups $customerGroups): static
    {
        $this->customerGroups = $customerGroups;
        return $this;
    }

    public function getXAmount(): TypeAmount
    {
        return $this->xAmount;
    }

    public function setXAmount(TypeAmount $xAmount): static
    {
        $this->xAmount = $xAmount;
        return $this;
    }

    public function getYAmount(): TypeAmount
    {
        return $this->yAmount;
    }

    public function setYAmount(TypeAmount $yAmount): static
    {
        $this->yAmount = $yAmount;
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

    public function getTermsAndConditionsUrl(): ?string
    {
        return $this->termsAndConditionsUrl;
    }

    public function setTermsAndConditionsUrl(?string $termsAndConditionsUrl): static
    {
        $this->termsAndConditionsUrl = $termsAndConditionsUrl;
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

    public function isDisplayBanner(): bool
    {
        return $this->displayBanner;
    }

    public function setDisplayBanner(bool $displayBanner): static
    {
        $this->displayBanner = $displayBanner;
        return $this;
    }

    public function getBannerColor(): ?TypeColor
    {
        return $this->bannerColor;
    }

    public function setBannerColor(?TypeColor $bannerColor): static
    {
        $this->bannerColor = $bannerColor;
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

    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    public function setUsageCount(?int $usageCount): static
    {
        $this->usageCount = $usageCount;
        return $this;
    }

    public function getXTargeting(): XyDiscountTargetingResponse
    {
        return $this->xTargeting;
    }

    public function setXTargeting(XyDiscountTargetingResponse $xTargeting): static
    {
        $this->xTargeting = $xTargeting;
        return $this;
    }

    public function getYTargeting(): XyDiscountTargetingResponse
    {
        return $this->yTargeting;
    }

    public function setYTargeting(XyDiscountTargetingResponse $yTargeting): static
    {
        $this->yTargeting = $yTargeting;
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
}

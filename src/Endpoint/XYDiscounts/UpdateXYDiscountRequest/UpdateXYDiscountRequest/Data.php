<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountRequest\UpdateXYDiscountRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\XyDiscountTargetingPostRequest;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountRequest\UpdateXYDiscountRequest\Data\CustomerGroupCodes;

class Data extends Entity
{
    protected ?string $title;
    protected ?TypeDate $validFrom;
    protected ?TypeDate $validTo;
    protected ?CustomerGroupCodes $customerGroupCodes;
    protected ?bool $includeUnregisteredCustomers;
    protected ?TypePositiveAmount $xAmount;
    protected ?TypePositiveAmount $yAmount;
    protected ?string $description;
    protected ?string $termsAndConditionsUrl;
    protected ?bool $displayFlag;
    protected ?TypeColor $flagColor;
    protected ?bool $displayBanner;
    protected ?TypeColor $bannerColor;
    protected ?int $usageCount;
    protected ?int $sortBefore;
    protected ?int $sortAfter;
    protected ?XyDiscountTargetingPostRequest $xTargeting;
    protected ?XyDiscountTargetingPostRequest $yTargeting;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
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

    public function getXAmount(): ?TypePositiveAmount
    {
        return $this->xAmount;
    }

    public function setXAmount(?TypePositiveAmount $xAmount): static
    {
        $this->xAmount = $xAmount;
        return $this;
    }

    public function getYAmount(): ?TypePositiveAmount
    {
        return $this->yAmount;
    }

    public function setYAmount(?TypePositiveAmount $yAmount): static
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

    public function getDisplayBanner(): ?bool
    {
        return $this->displayBanner;
    }

    public function setDisplayBanner(?bool $displayBanner): static
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

    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    public function setUsageCount(?int $usageCount): static
    {
        $this->usageCount = $usageCount;
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

    public function getXTargeting(): ?XyDiscountTargetingPostRequest
    {
        return $this->xTargeting;
    }

    public function setXTargeting(?XyDiscountTargetingPostRequest $xTargeting): static
    {
        $this->xTargeting = $xTargeting;
        return $this;
    }

    public function getYTargeting(): ?XyDiscountTargetingPostRequest
    {
        return $this->yTargeting;
    }

    public function setYTargeting(?XyDiscountTargetingPostRequest $yTargeting): static
    {
        $this->yTargeting = $yTargeting;
        return $this;
    }
}

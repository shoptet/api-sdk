<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataRequest\UpdateShippingDataRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataRequest\UpdateShippingDataRequest\Data\DeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataRequest\UpdateShippingDataRequest\Data\Price;

class Data extends Entity
{
    protected ?string $description;
    protected ?string $additionalText;
    protected ?Price $price;
    protected ?TypeCurrencyCode $currency;
    protected ?TypeDateTime $expires;
    protected ?DeliveryAddress $deliveryAddress;
    protected string $trackingNumber;
    protected ?string $branchId;
    protected ?string $branchName;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getAdditionalText(): ?string
    {
        return $this->additionalText;
    }

    public function setAdditionalText(?string $additionalText): static
    {
        $this->additionalText = $additionalText;
        return $this;
    }

    public function getPrice(): ?Price
    {
        return $this->price;
    }

    public function setPrice(?Price $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCurrency(): ?TypeCurrencyCode
    {
        return $this->currency;
    }

    public function setCurrency(?TypeCurrencyCode $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getExpires(): ?TypeDateTime
    {
        return $this->expires;
    }

    public function setExpires(?TypeDateTime $expires): static
    {
        $this->expires = $expires;
        return $this;
    }

    public function getDeliveryAddress(): ?DeliveryAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?DeliveryAddress $deliveryAddress): static
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(string $trackingNumber): static
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getBranchId(): ?string
    {
        return $this->branchId;
    }

    public function setBranchId(?string $branchId): static
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function getBranchName(): ?string
    {
        return $this->branchName;
    }

    public function setBranchName(?string $branchName): static
    {
        $this->branchName = $branchName;
        return $this;
    }
}

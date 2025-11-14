<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadRequest\UpdateOrderHeadRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadRequest\UpdateOrderHeadRequest\Data\BillingAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadRequest\UpdateOrderHeadRequest\Data\DeliveryAddress;

class Data extends Entity
{
    protected ?string $creationTime;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $birthDate;
    protected ?TypeGuidUnlimited $customerGuid;
    protected ?bool $addressesEqual;
    protected ?BillingAddress $billingAddress;
    protected ?DeliveryAddress $deliveryAddress;

    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }

    public function setCreationTime(?string $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): static
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getCustomerGuid(): ?TypeGuidUnlimited
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?TypeGuidUnlimited $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
        return $this;
    }

    public function getAddressesEqual(): ?bool
    {
        return $this->addressesEqual;
    }

    public function setAddressesEqual(?bool $addressesEqual): static
    {
        $this->addressesEqual = $addressesEqual;
        return $this;
    }

    public function getBillingAddress(): ?BillingAddress
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?BillingAddress $billingAddress): static
    {
        $this->billingAddress = $billingAddress;
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
}

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\BillingAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\Currency;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\DeliveryAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\Items;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\Notes;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\ShippingDetails;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;

class OrderCreate extends Entity
{
    protected ?string $creationTime;
    protected ?string $code;
    protected ?string $language;
    protected string $externalCode;
    protected ?bool $cashDeskOrder;
    protected ?int $statusId;
    protected ?int $sourceId;
    protected ?TypeGuidNullable $salesChannelGuid;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $birthDate;
    protected ?bool $vatPayer;
    protected ?TypeGuidNullable $paymentMethodGuid;
    protected ?TypeGuidNullable $shippingGuid;
    protected ?ShippingDetails $shippingDetails;
    protected ?bool $paid;
    protected ?int $billingMethodCode;
    protected ?string $clientIPAddress;
    protected ?TypeGuidNullable $customerGuid;
    protected ?BillingAddress $billingAddress;
    protected ?bool $addressesEqual;
    protected ?DeliveryAddress $deliveryAddress;
    protected ?Notes $notes;
    protected ?int $stockId;
    protected Currency $currency;
    protected ?string $vatMode;
    protected ?Items $items;

    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }

    public function setCreationTime(?string $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): static
    {
        $this->language = $language;
        return $this;
    }

    public function getExternalCode(): string
    {
        return $this->externalCode;
    }

    public function setExternalCode(string $externalCode): static
    {
        $this->externalCode = $externalCode;
        return $this;
    }

    public function getCashDeskOrder(): ?bool
    {
        return $this->cashDeskOrder;
    }

    public function setCashDeskOrder(?bool $cashDeskOrder): static
    {
        $this->cashDeskOrder = $cashDeskOrder;
        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(?int $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }

    public function getSourceId(): ?int
    {
        return $this->sourceId;
    }

    public function setSourceId(?int $sourceId): static
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getSalesChannelGuid(): ?TypeGuidNullable
    {
        return $this->salesChannelGuid;
    }

    public function setSalesChannelGuid(?TypeGuidNullable $salesChannelGuid): static
    {
        $this->salesChannelGuid = $salesChannelGuid;
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

    public function getVatPayer(): ?bool
    {
        return $this->vatPayer;
    }

    public function setVatPayer(?bool $vatPayer): static
    {
        $this->vatPayer = $vatPayer;
        return $this;
    }

    public function getPaymentMethodGuid(): ?TypeGuidNullable
    {
        return $this->paymentMethodGuid;
    }

    public function setPaymentMethodGuid(?TypeGuidNullable $paymentMethodGuid): static
    {
        $this->paymentMethodGuid = $paymentMethodGuid;
        return $this;
    }

    public function getShippingGuid(): ?TypeGuidNullable
    {
        return $this->shippingGuid;
    }

    public function setShippingGuid(?TypeGuidNullable $shippingGuid): static
    {
        $this->shippingGuid = $shippingGuid;
        return $this;
    }

    public function getShippingDetails(): ?ShippingDetails
    {
        return $this->shippingDetails;
    }

    public function setShippingDetails(?ShippingDetails $shippingDetails): static
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(?bool $paid): static
    {
        $this->paid = $paid;
        return $this;
    }

    public function getBillingMethodCode(): ?int
    {
        return $this->billingMethodCode;
    }

    public function setBillingMethodCode(?int $billingMethodCode): static
    {
        $this->billingMethodCode = $billingMethodCode;
        return $this;
    }

    public function getClientIPAddress(): ?string
    {
        return $this->clientIPAddress;
    }

    public function setClientIPAddress(?string $clientIPAddress): static
    {
        $this->clientIPAddress = $clientIPAddress;
        return $this;
    }

    public function getCustomerGuid(): ?TypeGuidNullable
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?TypeGuidNullable $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
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

    public function getAddressesEqual(): ?bool
    {
        return $this->addressesEqual;
    }

    public function setAddressesEqual(?bool $addressesEqual): static
    {
        $this->addressesEqual = $addressesEqual;
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

    public function getNotes(): ?Notes
    {
        return $this->notes;
    }

    public function setNotes(?Notes $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function getStockId(): ?int
    {
        return $this->stockId;
    }

    public function setStockId(?int $stockId): static
    {
        $this->stockId = $stockId;
        return $this;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getVatMode(): ?string
    {
        return $this->vatMode;
    }

    public function setVatMode(?string $vatMode): static
    {
        $this->vatMode = $vatMode;
        return $this;
    }

    public function getItems(): ?Items
    {
        return $this->items;
    }

    public function setItems(?Items $items): static
    {
        $this->items = $items;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\BillingAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\Currency;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\DeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\Items;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\Notes;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\ShippingDetails;

class Data extends Entity
{
    protected ?string $creationTime;
    protected ?string $code;
    protected ?string $language;
    protected string $externalCode;
    protected ?bool $cashDeskOrder;
    protected ?float $statusId;
    protected ?float $sourceId;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $birthDate;
    protected ?bool $vatPayer;
    protected ?TypeGuid $paymentMethodGuid;
    protected ?TypeGuid $shippingGuid;
    protected ?ShippingDetails $shippingDetails;
    protected ?bool $paid;
    protected ?float $billingMethodCode;
    protected ?string $clientIPAddress;
    protected ?TypeGuid $customerGuid;
    protected ?BillingAddress $billingAddress;
    protected ?bool $addressesEqual;
    protected ?DeliveryAddress $deliveryAddress;
    protected ?Notes $notes;
    protected ?float $stockId;
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

    public function getStatusId(): ?float
    {
        return $this->statusId;
    }

    public function setStatusId(?float $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }

    public function getSourceId(): ?float
    {
        return $this->sourceId;
    }

    public function setSourceId(?float $sourceId): static
    {
        $this->sourceId = $sourceId;
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

    public function getPaymentMethodGuid(): ?TypeGuid
    {
        return $this->paymentMethodGuid;
    }

    public function setPaymentMethodGuid(?TypeGuid $paymentMethodGuid): static
    {
        $this->paymentMethodGuid = $paymentMethodGuid;
        return $this;
    }

    public function getShippingGuid(): ?TypeGuid
    {
        return $this->shippingGuid;
    }

    public function setShippingGuid(?TypeGuid $shippingGuid): static
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

    public function getBillingMethodCode(): ?float
    {
        return $this->billingMethodCode;
    }

    public function setBillingMethodCode(?float $billingMethodCode): static
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

    public function getCustomerGuid(): ?TypeGuid
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?TypeGuid $customerGuid): static
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

    public function getStockId(): ?float
    {
        return $this->stockId;
    }

    public function setStockId(?float $stockId): static
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

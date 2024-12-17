<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Address;
use Shoptet\Api\Sdk\Php\Component\Entity\BillingAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\BillingMethod;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PaymentMethod;
use Shoptet\Api\Sdk\Php\Component\Entity\Price;
use Shoptet\Api\Sdk\Php\Component\Entity\Shipping;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\Items;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\Notes;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\PaymentMethods;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\ShippingDetails;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\Shippings;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\Source;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order\Status;

class Order extends Entity
{
    protected string $code;
    protected string $guid;
    protected ?string $externalCode;
    protected TypeDateTime $creationTime;
    protected ?TypeDateTime $changeTime;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $birthDate;
    protected ?string $clientIPAddress;
    protected ?TypeGuidUnlimited $customerGuid;
    protected bool $cashDeskOrder;
    protected float $stockId;
    protected bool $addressesEqual;
    protected bool $vatPayer;
    protected ?string $vatMode;
    protected ?BillingMethod $billingMethod;
    protected ?PaymentMethod $paymentMethod;
    protected ?Shipping $shipping;
    protected ?ShippingDetails $shippingDetails;
    protected string $adminUrl;
    protected ?Status $status;
    protected ?Source $source;
    protected Price $price;
    protected ?bool $paid;
    protected BillingAddress $billingAddress;
    protected Address $deliveryAddress;
    protected ?string $onlinePaymentLink;
    protected ?string $language;
    protected ?string $referer;
    protected ?PaymentMethods $paymentMethods;
    protected ?Shippings $shippings;
    protected Items $items;
    protected ?Notes $notes;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getExternalCode(): ?string
    {
        return $this->externalCode;
    }

    public function setExternalCode(?string $externalCode): static
    {
        $this->externalCode = $externalCode;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getChangeTime(): ?TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
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

    public function getClientIPAddress(): ?string
    {
        return $this->clientIPAddress;
    }

    public function setClientIPAddress(?string $clientIPAddress): static
    {
        $this->clientIPAddress = $clientIPAddress;
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

    public function isCashDeskOrder(): bool
    {
        return $this->cashDeskOrder;
    }

    public function setCashDeskOrder(bool $cashDeskOrder): static
    {
        $this->cashDeskOrder = $cashDeskOrder;
        return $this;
    }

    public function getStockId(): float
    {
        return $this->stockId;
    }

    public function setStockId(float $stockId): static
    {
        $this->stockId = $stockId;
        return $this;
    }

    public function isAddressesEqual(): bool
    {
        return $this->addressesEqual;
    }

    public function setAddressesEqual(bool $addressesEqual): static
    {
        $this->addressesEqual = $addressesEqual;
        return $this;
    }

    public function isVatPayer(): bool
    {
        return $this->vatPayer;
    }

    public function setVatPayer(bool $vatPayer): static
    {
        $this->vatPayer = $vatPayer;
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

    public function getBillingMethod(): ?BillingMethod
    {
        return $this->billingMethod;
    }

    public function setBillingMethod(?BillingMethod $billingMethod): static
    {
        $this->billingMethod = $billingMethod;
        return $this;
    }

    public function getPaymentMethod(): ?PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?PaymentMethod $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    public function setShipping(?Shipping $shipping): static
    {
        $this->shipping = $shipping;
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

    public function getAdminUrl(): string
    {
        return $this->adminUrl;
    }

    public function setAdminUrl(string $adminUrl): static
    {
        $this->adminUrl = $adminUrl;
        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function setSource(?Source $source): static
    {
        $this->source = $source;
        return $this;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): static
    {
        $this->price = $price;
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

    public function getBillingAddress(): BillingAddress
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(BillingAddress $billingAddress): static
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(Address $deliveryAddress): static
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getOnlinePaymentLink(): ?string
    {
        return $this->onlinePaymentLink;
    }

    public function setOnlinePaymentLink(?string $onlinePaymentLink): static
    {
        $this->onlinePaymentLink = $onlinePaymentLink;
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

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setReferer(?string $referer): static
    {
        $this->referer = $referer;
        return $this;
    }

    public function getPaymentMethods(): ?PaymentMethods
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?PaymentMethods $paymentMethods): static
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    public function getShippings(): ?Shippings
    {
        return $this->shippings;
    }

    public function setShippings(?Shippings $shippings): static
    {
        $this->shippings = $shippings;
        return $this;
    }

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): static
    {
        $this->items = $items;
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
}

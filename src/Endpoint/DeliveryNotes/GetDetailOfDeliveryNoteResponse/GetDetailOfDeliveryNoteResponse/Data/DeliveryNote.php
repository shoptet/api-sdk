<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNoteResponse\GetDetailOfDeliveryNoteResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Address;
use Shoptet\Api\Sdk\Php\Component\Entity\BillingAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\DocumentCustomer;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNoteResponse\GetDetailOfDeliveryNoteResponse\Data\DeliveryNote\Items;

class DeliveryNote extends Entity
{
    protected string $code;
    protected bool $isValid;
    protected ?string $orderCode;
    protected TypeDateTime $creationTime;
    protected TypeDateTime $changeTime;
    protected BillingAddress $billingAddress;
    protected ?Address $deliveryAddress;
    protected bool $addressesEqual;
    protected DocumentCustomer $customer;
    protected Items $items;
    protected ?string $documentRemark;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function isIsValid(): bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): static
    {
        $this->isValid = $isValid;
        return $this;
    }

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
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

    public function getChangeTime(): TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
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

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?Address $deliveryAddress): static
    {
        $this->deliveryAddress = $deliveryAddress;
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

    public function getCustomer(): DocumentCustomer
    {
        return $this->customer;
    }

    public function setCustomer(DocumentCustomer $customer): static
    {
        $this->customer = $customer;
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

    public function getDocumentRemark(): ?string
    {
        return $this->documentRemark;
    }

    public function setDocumentRemark(?string $documentRemark): static
    {
        $this->documentRemark = $documentRemark;
        return $this;
    }
}

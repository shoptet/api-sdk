<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentsResponse\GetListOfShipmentsResponse\Data\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentCoDPrice;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentCustomer;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPrice;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentSenderRecipientAddress;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentsResponse\GetListOfShipmentsResponse\Data\Items\Item\Packages;

class Item extends Entity
{
    protected ?TypeGuid $guid;
    protected ?string $orderCode;
    protected ?ShipmentSenderRecipientAddress $sender;
    protected ?ShipmentSenderRecipientAddress $recipient;

    /** @deprecated */
    protected ?ShipmentAddress $carrierAddress;
    protected ?string $status;
    protected ?string $serviceCode;
    protected ?ShipmentCoDPrice $cod;
    protected ?ShipmentPrice $value;

    /** @deprecated */
    protected ?ShipmentCustomer $customer;
    protected ?Packages $packages;
    protected ?string $note;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
    {
        $this->guid = $guid;
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

    public function getSender(): ?ShipmentSenderRecipientAddress
    {
        return $this->sender;
    }

    public function setSender(?ShipmentSenderRecipientAddress $sender): static
    {
        $this->sender = $sender;
        return $this;
    }

    public function getRecipient(): ?ShipmentSenderRecipientAddress
    {
        return $this->recipient;
    }

    public function setRecipient(?ShipmentSenderRecipientAddress $recipient): static
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getCarrierAddress(): ?ShipmentAddress
    {
        return $this->carrierAddress;
    }

    /**
     * @deprecated
     */
    public function setCarrierAddress(?ShipmentAddress $carrierAddress): static
    {
        $this->carrierAddress = $carrierAddress;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    public function setServiceCode(?string $serviceCode): static
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    public function getCod(): ?ShipmentCoDPrice
    {
        return $this->cod;
    }

    public function setCod(?ShipmentCoDPrice $cod): static
    {
        $this->cod = $cod;
        return $this;
    }

    public function getValue(): ?ShipmentPrice
    {
        return $this->value;
    }

    public function setValue(?ShipmentPrice $value): static
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomer(): ?ShipmentCustomer
    {
        return $this->customer;
    }

    /**
     * @deprecated
     */
    public function setCustomer(?ShipmentCustomer $customer): static
    {
        $this->customer = $customer;
        return $this;
    }

    public function getPackages(): ?Packages
    {
        return $this->packages;
    }

    public function setPackages(?Packages $packages): static
    {
        $this->packages = $packages;
        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;
        return $this;
    }
}

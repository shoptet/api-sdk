<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse\Data\ShippingOptions;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse\Data\ShippingOptions\Item\BankAccounts;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse\Data\ShippingOptions\Item\CarrierAddresses;

class Item extends Entity
{
    protected int $shippingId;
    protected string $methodName;
    protected ?string $carrierCode;
    protected ?string $serviceCode;
    protected int $maxShipment;
    protected CarrierAddresses $carrierAddresses;
    protected BankAccounts $bankAccounts;
    protected ?string $branch;

    public function getShippingId(): int
    {
        return $this->shippingId;
    }

    public function setShippingId(int $shippingId): static
    {
        $this->shippingId = $shippingId;
        return $this;
    }

    public function getMethodName(): string
    {
        return $this->methodName;
    }

    public function setMethodName(string $methodName): static
    {
        $this->methodName = $methodName;
        return $this;
    }

    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    public function setCarrierCode(?string $carrierCode): static
    {
        $this->carrierCode = $carrierCode;
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

    public function getMaxShipment(): int
    {
        return $this->maxShipment;
    }

    public function setMaxShipment(int $maxShipment): static
    {
        $this->maxShipment = $maxShipment;
        return $this;
    }

    public function getCarrierAddresses(): CarrierAddresses
    {
        return $this->carrierAddresses;
    }

    public function setCarrierAddresses(CarrierAddresses $carrierAddresses): static
    {
        $this->carrierAddresses = $carrierAddresses;
        return $this;
    }

    public function getBankAccounts(): BankAccounts
    {
        return $this->bankAccounts;
    }

    public function setBankAccounts(BankAccounts $bankAccounts): static
    {
        $this->bankAccounts = $bankAccounts;
        return $this;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function setBranch(?string $branch): static
    {
        $this->branch = $branch;
        return $this;
    }
}

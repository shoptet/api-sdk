<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\Addresses;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\BankAccounts;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\Methods;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\Services;

class Data extends Entity
{
    protected string $name;
    protected string $description;
    protected Services $services;
    protected string $activationStatus;
    protected Methods $methods;
    protected ?Addresses $addresses;
    protected ?BankAccounts $bankAccounts;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getServices(): Services
    {
        return $this->services;
    }

    public function setServices(Services $services): static
    {
        $this->services = $services;
        return $this;
    }

    public function getActivationStatus(): string
    {
        return $this->activationStatus;
    }

    public function setActivationStatus(string $activationStatus): static
    {
        $this->activationStatus = $activationStatus;
        return $this;
    }

    public function getMethods(): Methods
    {
        return $this->methods;
    }

    public function setMethods(Methods $methods): static
    {
        $this->methods = $methods;
        return $this;
    }

    public function getAddresses(): ?Addresses
    {
        return $this->addresses;
    }

    public function setAddresses(?Addresses $addresses): static
    {
        $this->addresses = $addresses;
        return $this;
    }

    public function getBankAccounts(): ?BankAccounts
    {
        return $this->bankAccounts;
    }

    public function setBankAccounts(?BankAccounts $bankAccounts): static
    {
        $this->bankAccounts = $bankAccounts;
        return $this;
    }
}

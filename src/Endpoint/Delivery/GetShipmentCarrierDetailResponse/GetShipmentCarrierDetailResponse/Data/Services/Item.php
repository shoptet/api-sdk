<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\Services;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\Services\Item\Countries;

class Item extends Entity
{
    protected int $serviceId;
    protected string $name;
    protected string $description;
    protected string $deliveryType;
    protected bool $hasCollection;
    protected Countries $countries;

    public function getServiceId(): int
    {
        return $this->serviceId;
    }

    public function setServiceId(int $serviceId): static
    {
        $this->serviceId = $serviceId;
        return $this;
    }

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

    public function getDeliveryType(): string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(string $deliveryType): static
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    public function isHasCollection(): bool
    {
        return $this->hasCollection;
    }

    public function setHasCollection(bool $hasCollection): static
    {
        $this->hasCollection = $hasCollection;
        return $this;
    }

    public function getCountries(): Countries
    {
        return $this->countries;
    }

    public function setCountries(Countries $countries): static
    {
        $this->countries = $countries;
        return $this;
    }
}

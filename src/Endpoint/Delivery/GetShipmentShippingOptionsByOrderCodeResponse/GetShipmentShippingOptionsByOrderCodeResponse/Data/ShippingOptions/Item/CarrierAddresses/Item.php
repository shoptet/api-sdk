<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse\Data\ShippingOptions\Item\CarrierAddresses;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected string $address;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;
        return $this;
    }
}

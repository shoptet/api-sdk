<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentCarriersResponse\GetListOfShipmentCarriersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentCarriersResponse\GetListOfShipmentCarriersResponse\Data\ShipmentCarriers;

class Data extends Entity
{
    protected ShipmentCarriers $shipmentCarriers;

    public function getShipmentCarriers(): ShipmentCarriers
    {
        return $this->shipmentCarriers;
    }

    public function setShipmentCarriers(ShipmentCarriers $shipmentCarriers): static
    {
        $this->shipmentCarriers = $shipmentCarriers;
        return $this;
    }
}

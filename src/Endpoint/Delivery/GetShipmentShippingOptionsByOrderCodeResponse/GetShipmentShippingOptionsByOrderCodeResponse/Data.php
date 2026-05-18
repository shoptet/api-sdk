<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse\Data\ShippingOptions;

class Data extends Entity
{
    protected ShippingOptions $shippingOptions;

    public function getShippingOptions(): ShippingOptions
    {
        return $this->shippingOptions;
    }

    public function setShippingOptions(ShippingOptions $shippingOptions): static
    {
        $this->shippingOptions = $shippingOptions;
        return $this;
    }
}

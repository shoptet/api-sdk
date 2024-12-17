<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerDeliveryAddressResponse\GetDetailOfCustomerDeliveryAddressResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\DeliveryAddressCustomer;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected DeliveryAddressCustomer $deliveryAddress;

    public function getDeliveryAddress(): DeliveryAddressCustomer
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(DeliveryAddressCustomer $deliveryAddress): static
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
}

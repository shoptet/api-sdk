<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GeListOfCustomerDeliveryAddressesResponse\GeListOfCustomerDeliveryAddressesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GeListOfCustomerDeliveryAddressesResponse\GeListOfCustomerDeliveryAddressesResponse\Data\DeliveryAddresses;

class Data extends Entity
{
    protected DeliveryAddresses $deliveryAddresses;
    protected Paginator $paginator;

    public function getDeliveryAddresses(): DeliveryAddresses
    {
        return $this->deliveryAddresses;
    }

    public function setDeliveryAddresses(DeliveryAddresses $deliveryAddresses): static
    {
        $this->deliveryAddresses = $deliveryAddresses;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\CreateDeliveryAddressRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\DeliveryAddressCustomerCreate;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CreateDeliveryAddressRequest extends Entity
{
    protected DeliveryAddressCustomerCreate $data;

    public function getData(): DeliveryAddressCustomerCreate
    {
        return $this->data;
    }

    public function setData(DeliveryAddressCustomerCreate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

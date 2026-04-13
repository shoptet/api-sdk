<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data;

class CreateShippingMethodRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingRequest\AddOrderShippingRequest\Data;

class AddOrderShippingRequest extends Entity
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

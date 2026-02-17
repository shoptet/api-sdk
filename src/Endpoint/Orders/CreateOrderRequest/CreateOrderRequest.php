<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate;

class CreateOrderRequest extends Entity
{
    protected OrderCreate $data;

    public function getData(): OrderCreate
    {
        return $this->data;
    }

    public function setData(OrderCreate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

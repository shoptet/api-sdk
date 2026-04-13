<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\CreateOrderRemarkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\CreateOrderRemarkRequest\CreateOrderRemarkRequest\Data;

class CreateOrderRemarkRequest extends Entity
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

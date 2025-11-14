<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyRequest\OrderCopyRequest\Data;

class OrderCopyRequest extends Entity
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemarkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemarkRequest\UpdateCustomerRemarkRequest\Data;

class UpdateCustomerRemarkRequest extends Entity
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

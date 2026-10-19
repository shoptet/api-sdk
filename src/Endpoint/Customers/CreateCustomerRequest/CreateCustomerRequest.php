<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\CustomerCreate;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CreateCustomerRequest extends Entity
{
    protected CustomerCreate $data;

    public function getData(): CustomerCreate
    {
        return $this->data;
    }

    public function setData(CustomerCreate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

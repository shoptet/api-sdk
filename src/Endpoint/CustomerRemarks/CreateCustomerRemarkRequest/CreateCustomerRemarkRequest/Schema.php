<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\CreateCustomerRemarkRequest\CreateCustomerRemarkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\CreateCustomerRemarkRequest\CreateCustomerRemarkRequest\Schema\Data;

class Schema extends Entity
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

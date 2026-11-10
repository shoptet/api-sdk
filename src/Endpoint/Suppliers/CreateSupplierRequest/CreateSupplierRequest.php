<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Suppliers\CreateSupplierRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\SupplierCreate;

class CreateSupplierRequest extends Entity
{
    protected SupplierCreate $data;

    public function getData(): SupplierCreate
    {
        return $this->data;
    }

    public function setData(SupplierCreate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

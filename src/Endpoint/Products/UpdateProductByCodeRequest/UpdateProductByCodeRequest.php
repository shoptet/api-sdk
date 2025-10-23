<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate;

class UpdateProductByCodeRequest extends Entity
{
    protected ProductUpdate $data;

    public function getData(): ProductUpdate
    {
        return $this->data;
    }

    public function setData(ProductUpdate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

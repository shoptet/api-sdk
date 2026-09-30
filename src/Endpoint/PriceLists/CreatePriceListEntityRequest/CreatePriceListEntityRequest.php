<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePriceListEntityRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePriceListEntityRequest\CreatePriceListEntityRequest\Data;

class CreatePriceListEntityRequest extends Entity
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

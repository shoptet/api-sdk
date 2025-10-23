<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistRequest\CreatePricelistRequest\Data;

class CreatePricelistRequest extends Entity
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate;

class UpdatePricelistRequest extends Entity
{
    protected PricelistUpdate $data;

    public function getData(): PricelistUpdate
    {
        return $this->data;
    }

    public function setData(PricelistUpdate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\UpdatePriceListPricesRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate;

class UpdatePriceListPricesRequest extends Entity
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

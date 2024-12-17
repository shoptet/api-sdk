<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistResponse\CreatePricelistResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Pricelist;

class Data extends Entity
{
    protected ?Pricelist $data;

    public function getData(): ?Pricelist
    {
        return $this->data;
    }

    public function setData(?Pricelist $data): static
    {
        $this->data = $data;
        return $this;
    }
}

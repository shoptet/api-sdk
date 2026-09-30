<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPriceListsResponse\GetPriceListsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPriceListsResponse\GetPriceListsResponse\Data\PriceLists;

class Data extends Entity
{
    protected PriceLists $priceLists;

    public function getPriceLists(): PriceLists
    {
        return $this->priceLists;
    }

    public function setPriceLists(PriceLists $priceLists): static
    {
        $this->priceLists = $priceLists;
        return $this;
    }
}

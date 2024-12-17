<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfPriceListsResponse\GetListOfPriceListsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfPriceListsResponse\GetListOfPriceListsResponse\Data\Pricelists;

class Data extends Entity
{
    protected Pricelists $pricelists;

    public function getPricelists(): Pricelists
    {
        return $this->pricelists;
    }

    public function setPricelists(Pricelists $pricelists): static
    {
        $this->pricelists = $pricelists;
        return $this;
    }
}

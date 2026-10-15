<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPriceListEntityResponse\GetPriceListEntityResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PriceListEntity;

class Data extends Entity
{
    protected PriceListEntity $priceList;

    public function getPriceList(): PriceListEntity
    {
        return $this->priceList;
    }

    public function setPriceList(PriceListEntity $priceList): static
    {
        $this->priceList = $priceList;
        return $this;
    }
}

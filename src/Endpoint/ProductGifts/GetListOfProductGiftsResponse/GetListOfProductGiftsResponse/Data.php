<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\GetListOfProductGiftsResponse\GetListOfProductGiftsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductGifts;

class Data extends Entity
{
    protected ProductGifts $items;

    public function getItems(): ProductGifts
    {
        return $this->items;
    }

    public function setItems(ProductGifts $items): static
    {
        $this->items = $items;
        return $this;
    }
}

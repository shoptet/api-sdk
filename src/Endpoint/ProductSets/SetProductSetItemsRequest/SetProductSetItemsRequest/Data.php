<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductSets\SetProductSetItemsRequest\SetProductSetItemsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\SetProductSetItemsRequest\SetProductSetItemsRequest\Data\SetItems;

class Data extends Entity
{
    protected SetItems $setItems;

    public function getSetItems(): SetItems
    {
        return $this->setItems;
    }

    public function setSetItems(SetItems $setItems): static
    {
        $this->setItems = $setItems;
        return $this;
    }
}

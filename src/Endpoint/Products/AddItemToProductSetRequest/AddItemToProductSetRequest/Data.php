<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\AddItemToProductSetRequest\AddItemToProductSetRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddItemToProductSetRequest\AddItemToProductSetRequest\Data\SetItem;

class Data extends Entity
{
    protected SetItem $setItem;

    public function getSetItem(): SetItem
    {
        return $this->setItem;
    }

    public function setSetItem(SetItem $setItem): static
    {
        $this->setItem = $setItem;
        return $this;
    }
}

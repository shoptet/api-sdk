<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Instores\GetListOfInStoresResponse\GetListOfInStoresResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Instores\GetListOfInStoresResponse\GetListOfInStoresResponse\Data\InStores;

class Data extends Entity
{
    protected InStores $inStores;

    public function getInStores(): InStores
    {
        return $this->inStores;
    }

    public function setInStores(InStores $inStores): static
    {
        $this->inStores = $inStores;
        return $this;
    }
}

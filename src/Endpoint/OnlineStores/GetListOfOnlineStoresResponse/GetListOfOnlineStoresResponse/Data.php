<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetListOfOnlineStoresResponse\GetListOfOnlineStoresResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetListOfOnlineStoresResponse\GetListOfOnlineStoresResponse\Data\OnlineStores;

class Data extends Entity
{
    protected OnlineStores $onlineStores;

    public function getOnlineStores(): OnlineStores
    {
        return $this->onlineStores;
    }

    public function setOnlineStores(OnlineStores $onlineStores): static
    {
        $this->onlineStores = $onlineStores;
        return $this;
    }
}

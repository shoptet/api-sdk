<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetOnlineStoreDetailResponse\GetOnlineStoreDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\OnlineStore;

class Data extends Entity
{
    protected OnlineStore $onlineStore;

    public function getOnlineStore(): OnlineStore
    {
        return $this->onlineStore;
    }

    public function setOnlineStore(OnlineStore $onlineStore): static
    {
        $this->onlineStore = $onlineStore;
        return $this;
    }
}

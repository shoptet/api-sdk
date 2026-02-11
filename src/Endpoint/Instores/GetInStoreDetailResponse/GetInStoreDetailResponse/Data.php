<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Instores\GetInStoreDetailResponse\GetInStoreDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Instores\GetInStoreDetailResponse\GetInStoreDetailResponse\Data\InStore;

class Data extends Entity
{
    protected InStore $inStore;

    public function getInStore(): InStore
    {
        return $this->inStore;
    }

    public function setInStore(InStore $inStore): static
    {
        $this->inStore = $inStore;
        return $this;
    }
}

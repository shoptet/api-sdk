<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse\Data\InStore;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse\Data\Marketplace;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse\Data\OnlineStore;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse\Data\SalesChannel;

class Data extends Entity
{
    protected SalesChannel $salesChannel;
    protected ?OnlineStore $onlineStore;
    protected ?InStore $inStore;
    protected ?Marketplace $marketplace;

    public function getSalesChannel(): SalesChannel
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(SalesChannel $salesChannel): static
    {
        $this->salesChannel = $salesChannel;
        return $this;
    }

    public function getOnlineStore(): ?OnlineStore
    {
        return $this->onlineStore;
    }

    public function setOnlineStore(?OnlineStore $onlineStore): static
    {
        $this->onlineStore = $onlineStore;
        return $this;
    }

    public function getInStore(): ?InStore
    {
        return $this->inStore;
    }

    public function setInStore(?InStore $inStore): static
    {
        $this->inStore = $inStore;
        return $this;
    }

    public function getMarketplace(): ?Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?Marketplace $marketplace): static
    {
        $this->marketplace = $marketplace;
        return $this;
    }
}

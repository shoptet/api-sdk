<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse\Data\SalesChannels;

class Data extends Entity
{
    protected SalesChannels $salesChannels;

    public function getSalesChannels(): SalesChannels
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(SalesChannels $salesChannels): static
    {
        $this->salesChannels = $salesChannels;
        return $this;
    }
}

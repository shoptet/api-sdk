<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegionsResponse\GetListOfCustomerRegionsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegionsResponse\GetListOfCustomerRegionsResponse\Data\Regions;

class Data extends Entity
{
    protected Regions $regions;

    public function getRegions(): Regions
    {
        return $this->regions;
    }

    public function setRegions(Regions $regions): static
    {
        $this->regions = $regions;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerGroupsResponse\GetListOfCustomerGroupsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerGroupsResponse\GetListOfCustomerGroupsResponse\Data\CustomerGroups;

class Data extends Entity
{
    protected CustomerGroups $customerGroups;

    public function getCustomerGroups(): CustomerGroups
    {
        return $this->customerGroups;
    }

    public function setCustomerGroups(CustomerGroups $customerGroups): static
    {
        $this->customerGroups = $customerGroups;
        return $this;
    }
}

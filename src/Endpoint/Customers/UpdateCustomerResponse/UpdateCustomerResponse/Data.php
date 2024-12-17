<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse\Data\Customer;

class Data extends Entity
{
    protected Customer $customer;

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): static
    {
        $this->customer = $customer;
        return $this;
    }
}

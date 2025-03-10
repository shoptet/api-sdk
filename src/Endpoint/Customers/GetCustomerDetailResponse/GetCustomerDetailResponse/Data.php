<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetCustomerDetailResponse\GetCustomerDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Customer;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerAccountsResponse\GetListOfCustomerAccountsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerAccountsResponse\GetListOfCustomerAccountsResponse\Data\Accounts;

class Data extends Entity
{
    protected Accounts $accounts;
    protected Paginator $paginator;

    public function getAccounts(): Accounts
    {
        return $this->accounts;
    }

    public function setAccounts(Accounts $accounts): static
    {
        $this->accounts = $accounts;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

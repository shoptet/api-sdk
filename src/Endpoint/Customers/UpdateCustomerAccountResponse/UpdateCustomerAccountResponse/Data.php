<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerAccountResponse\UpdateCustomerAccountResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerAccountResponse\UpdateCustomerAccountResponse\Data\Account;

class Data extends Entity
{
    protected Account $account;

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): static
    {
        $this->account = $account;
        return $this;
    }
}

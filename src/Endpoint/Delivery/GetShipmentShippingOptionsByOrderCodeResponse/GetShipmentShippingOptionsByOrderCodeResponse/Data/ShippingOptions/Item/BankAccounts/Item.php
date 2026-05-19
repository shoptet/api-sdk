<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse\Data\ShippingOptions\Item\BankAccounts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected string $bankAccount;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    public function setBankAccount(string $bankAccount): static
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }
}

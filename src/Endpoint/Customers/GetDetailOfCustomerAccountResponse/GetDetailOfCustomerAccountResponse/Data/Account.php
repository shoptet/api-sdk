<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerAccountResponse\GetDetailOfCustomerAccountResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Account extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected ?string $fullName;
    protected string $email;
    protected ?string $phone;
    protected bool $mainAccount;
    protected bool $authorized;
    protected bool $emailVerified;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function isMainAccount(): bool
    {
        return $this->mainAccount;
    }

    public function setMainAccount(bool $mainAccount): static
    {
        $this->mainAccount = $mainAccount;
        return $this;
    }

    public function isAuthorized(): bool
    {
        return $this->authorized;
    }

    public function setAuthorized(bool $authorized): static
    {
        $this->authorized = $authorized;
        return $this;
    }

    public function isEmailVerified(): bool
    {
        return $this->emailVerified;
    }

    public function setEmailVerified(bool $emailVerified): static
    {
        $this->emailVerified = $emailVerified;
        return $this;
    }
}

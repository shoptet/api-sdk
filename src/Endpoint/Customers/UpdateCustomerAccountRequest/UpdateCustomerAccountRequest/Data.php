<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerAccountRequest\UpdateCustomerAccountRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?string $fullName;
    protected ?string $email;
    protected ?string $phone;
    protected ?bool $mainAccount;
    protected ?bool $authorized;
    protected ?bool $emailVerified;

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
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

    public function getMainAccount(): ?bool
    {
        return $this->mainAccount;
    }

    public function setMainAccount(?bool $mainAccount): static
    {
        $this->mainAccount = $mainAccount;
        return $this;
    }

    public function getAuthorized(): ?bool
    {
        return $this->authorized;
    }

    public function setAuthorized(?bool $authorized): static
    {
        $this->authorized = $authorized;
        return $this;
    }

    public function getEmailVerified(): ?bool
    {
        return $this->emailVerified;
    }

    public function setEmailVerified(?bool $emailVerified): static
    {
        $this->emailVerified = $emailVerified;
        return $this;
    }
}

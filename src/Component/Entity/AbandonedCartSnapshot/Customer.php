<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\AbandonedCartSnapshot;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Customer extends Entity
{
    protected string $name;
    protected ?string $email;
    protected ?string $phone;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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
}

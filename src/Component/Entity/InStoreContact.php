<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class InStoreContact extends Entity
{
    protected ?string $email;
    protected ?string $phone;
    protected ?string $openingHour;
    protected ?string $transport;

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

    public function getOpeningHour(): ?string
    {
        return $this->openingHour;
    }

    public function setOpeningHour(?string $openingHour): static
    {
        $this->openingHour = $openingHour;
        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(?string $transport): static
    {
        $this->transport = $transport;
        return $this;
    }
}

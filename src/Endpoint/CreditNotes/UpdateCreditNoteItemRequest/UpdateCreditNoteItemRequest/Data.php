<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItemRequest\UpdateCreditNoteItemRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class Data extends Entity
{
    protected ?TypeAmount $amount;
    protected ?string $price;
    protected ?bool $includingVat;
    protected ?TypeVatRate $vatRate;

    public function getAmount(): ?TypeAmount
    {
        return $this->amount;
    }

    public function setAmount(?TypeAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getIncludingVat(): ?bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(?bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }

    public function getVatRate(): ?TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(?TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }
}

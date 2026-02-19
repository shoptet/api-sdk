<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteRequest\UpdateCreditNoteRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbolNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;

class Data extends Entity
{
    protected ?float $varSymbol;
    protected ?TypeDateNullable $dueDate;
    protected ?TypeDateNullable $taxDate;
    protected ?TypeConstSymbolNullable $constSymbol;
    protected ?float $specSymbol;
    protected ?int $billingMethodId;
    protected ?string $orderCode;
    protected ?string $reasonRemark;

    public function getVarSymbol(): ?float
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(?float $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
        return $this;
    }

    public function getDueDate(): ?TypeDateNullable
    {
        return $this->dueDate;
    }

    public function setDueDate(?TypeDateNullable $dueDate): static
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getTaxDate(): ?TypeDateNullable
    {
        return $this->taxDate;
    }

    public function setTaxDate(?TypeDateNullable $taxDate): static
    {
        $this->taxDate = $taxDate;
        return $this;
    }

    public function getConstSymbol(): ?TypeConstSymbolNullable
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?TypeConstSymbolNullable $constSymbol): static
    {
        $this->constSymbol = $constSymbol;
        return $this;
    }

    public function getSpecSymbol(): ?float
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?float $specSymbol): static
    {
        $this->specSymbol = $specSymbol;
        return $this;
    }

    public function getBillingMethodId(): ?int
    {
        return $this->billingMethodId;
    }

    public function setBillingMethodId(?int $billingMethodId): static
    {
        $this->billingMethodId = $billingMethodId;
        return $this;
    }

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getReasonRemark(): ?string
    {
        return $this->reasonRemark;
    }

    public function setReasonRemark(?string $reasonRemark): static
    {
        $this->reasonRemark = $reasonRemark;
        return $this;
    }
}

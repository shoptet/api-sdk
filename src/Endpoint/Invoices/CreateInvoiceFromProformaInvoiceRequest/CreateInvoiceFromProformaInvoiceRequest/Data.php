<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoiceRequest\CreateInvoiceFromProformaInvoiceRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbol;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeSpecSymbol;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVarSymbol;

class Data extends Entity
{
    protected ?string $invoiceCode;
    protected ?TypeVarSymbol $varSymbol;
    protected ?TypeDate $dueDate;
    protected ?TypeDate $taxDate;
    protected ?TypeConstSymbol $constSymbol;
    protected ?TypeSpecSymbol $specSymbol;
    protected ?int $billingMethodId;

    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    public function setInvoiceCode(?string $invoiceCode): static
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    public function getVarSymbol(): ?TypeVarSymbol
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(?TypeVarSymbol $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
        return $this;
    }

    public function getDueDate(): ?TypeDate
    {
        return $this->dueDate;
    }

    public function setDueDate(?TypeDate $dueDate): static
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getTaxDate(): ?TypeDate
    {
        return $this->taxDate;
    }

    public function setTaxDate(?TypeDate $taxDate): static
    {
        $this->taxDate = $taxDate;
        return $this;
    }

    public function getConstSymbol(): ?TypeConstSymbol
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?TypeConstSymbol $constSymbol): static
    {
        $this->constSymbol = $constSymbol;
        return $this;
    }

    public function getSpecSymbol(): ?TypeSpecSymbol
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?TypeSpecSymbol $specSymbol): static
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
}

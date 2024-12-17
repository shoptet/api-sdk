<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrderRequest\CreateInvoiceFromOrderRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbol;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrderRequest\CreateInvoiceFromOrderRequest\Data\ProofPaymentCodes;

class Data extends Entity
{
    protected ?string $invoiceCode;
    protected ?float $varSymbol;
    protected ?TypeDate $dueDate;
    protected ?TypeDate $taxDate;
    protected ?TypeConstSymbol $constSymbol;
    protected ?float $specSymbol;
    protected ?float $billingMethodId;
    protected ?string $proformaInvoiceCode;
    protected ?ProofPaymentCodes $proofPaymentCodes;

    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    public function setInvoiceCode(?string $invoiceCode): static
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    public function getVarSymbol(): ?float
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(?float $varSymbol): static
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

    public function getSpecSymbol(): ?float
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?float $specSymbol): static
    {
        $this->specSymbol = $specSymbol;
        return $this;
    }

    public function getBillingMethodId(): ?float
    {
        return $this->billingMethodId;
    }

    public function setBillingMethodId(?float $billingMethodId): static
    {
        $this->billingMethodId = $billingMethodId;
        return $this;
    }

    public function getProformaInvoiceCode(): ?string
    {
        return $this->proformaInvoiceCode;
    }

    public function setProformaInvoiceCode(?string $proformaInvoiceCode): static
    {
        $this->proformaInvoiceCode = $proformaInvoiceCode;
        return $this;
    }

    public function getProofPaymentCodes(): ?ProofPaymentCodes
    {
        return $this->proofPaymentCodes;
    }

    public function setProofPaymentCodes(?ProofPaymentCodes $proofPaymentCodes): static
    {
        $this->proofPaymentCodes = $proofPaymentCodes;
        return $this;
    }
}

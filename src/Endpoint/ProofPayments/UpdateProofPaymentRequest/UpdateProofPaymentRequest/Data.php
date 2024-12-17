<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPaymentRequest\UpdateProofPaymentRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Data extends Entity
{
    protected ?TypeDate $taxDate;
    protected ?TypeDateTime $issueDate;
    protected ?float $varSymbol;
    protected ?string $constSymbol;
    protected ?float $specSymbol;
    protected ?int $invoiceBillingMethodId;
    protected ?string $billBankAccount;
    protected ?string $billIban;
    protected ?string $billBic;
    protected ?string $bankAccount;
    protected ?string $iban;
    protected ?string $bic;
    protected ?bool $isValid;
    protected ?string $documentRemark;

    public function getTaxDate(): ?TypeDate
    {
        return $this->taxDate;
    }

    public function setTaxDate(?TypeDate $taxDate): static
    {
        $this->taxDate = $taxDate;
        return $this;
    }

    public function getIssueDate(): ?TypeDateTime
    {
        return $this->issueDate;
    }

    public function setIssueDate(?TypeDateTime $issueDate): static
    {
        $this->issueDate = $issueDate;
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

    public function getConstSymbol(): ?string
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?string $constSymbol): static
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

    public function getInvoiceBillingMethodId(): ?int
    {
        return $this->invoiceBillingMethodId;
    }

    public function setInvoiceBillingMethodId(?int $invoiceBillingMethodId): static
    {
        $this->invoiceBillingMethodId = $invoiceBillingMethodId;
        return $this;
    }

    public function getBillBankAccount(): ?string
    {
        return $this->billBankAccount;
    }

    public function setBillBankAccount(?string $billBankAccount): static
    {
        $this->billBankAccount = $billBankAccount;
        return $this;
    }

    public function getBillIban(): ?string
    {
        return $this->billIban;
    }

    public function setBillIban(?string $billIban): static
    {
        $this->billIban = $billIban;
        return $this;
    }

    public function getBillBic(): ?string
    {
        return $this->billBic;
    }

    public function setBillBic(?string $billBic): static
    {
        $this->billBic = $billBic;
        return $this;
    }

    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?string $bankAccount): static
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): static
    {
        $this->iban = $iban;
        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): static
    {
        $this->bic = $bic;
        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(?bool $isValid): static
    {
        $this->isValid = $isValid;
        return $this;
    }

    public function getDocumentRemark(): ?string
    {
        return $this->documentRemark;
    }

    public function setDocumentRemark(?string $documentRemark): static
    {
        $this->documentRemark = $documentRemark;
        return $this;
    }
}

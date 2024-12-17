<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentRequest\CreateProofPaymentRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Data extends Entity
{
    protected ?string $proformaInvoiceCode;
    protected ?string $orderCode;
    protected TypePrice $payment;
    protected TypeCurrencyCode $currencyCode;
    protected float $varSymbol;
    protected ?TypeDateTime $issueDate;
    protected ?TypeDate $taxDate;
    protected ?string $constSymbol;
    protected ?float $specSymbol;
    protected ?int $invoiceBillingMethodId;
    protected ?string $billBankAccount;
    protected ?string $billIban;
    protected ?string $billBic;
    protected ?string $documentRemark;

    public function getProformaInvoiceCode(): ?string
    {
        return $this->proformaInvoiceCode;
    }

    public function setProformaInvoiceCode(?string $proformaInvoiceCode): static
    {
        $this->proformaInvoiceCode = $proformaInvoiceCode;
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

    public function getPayment(): TypePrice
    {
        return $this->payment;
    }

    public function setPayment(TypePrice $payment): static
    {
        $this->payment = $payment;
        return $this;
    }

    public function getCurrencyCode(): TypeCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(TypeCurrencyCode $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getVarSymbol(): float
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(float $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
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

    public function getTaxDate(): ?TypeDate
    {
        return $this->taxDate;
    }

    public function setTaxDate(?TypeDate $taxDate): static
    {
        $this->taxDate = $taxDate;
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentRequest\CreateProofPaymentRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbolNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeRequest;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeSpecSymbolNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVarSymbol;

class Data extends Entity
{
    protected ?string $proformaInvoiceCode;
    protected ?string $orderCode;
    protected TypePriceNullable $payment;
    protected TypeCurrencyCode $currencyCode;
    protected TypeVarSymbol $varSymbol;
    protected ?TypeDateTimeRequest $issueDate;
    protected ?TypeDateNullable $taxDate;
    protected ?TypeConstSymbolNullable $constSymbol;
    protected ?TypeSpecSymbolNullable $specSymbol;
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

    public function getPayment(): TypePriceNullable
    {
        return $this->payment;
    }

    public function setPayment(TypePriceNullable $payment): static
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

    public function getVarSymbol(): TypeVarSymbol
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(TypeVarSymbol $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
        return $this;
    }

    public function getIssueDate(): ?TypeDateTimeRequest
    {
        return $this->issueDate;
    }

    public function setIssueDate(?TypeDateTimeRequest $issueDate): static
    {
        $this->issueDate = $issueDate;
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

    public function getSpecSymbol(): ?TypeSpecSymbolNullable
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?TypeSpecSymbolNullable $specSymbol): static
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

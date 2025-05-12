<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class ProofPaymentsList extends Entity
{
    protected string $code;
    protected ?string $orderCode;
    protected ?string $proformaInvoiceCode;
    protected TypeDateTimeNullable $issueDate;
    protected ?string $billFullName;
    protected TypePriceNullable $payment;
    protected bool $isValid;
    protected ?string $vatMode;
    protected ?string $invoiceCode;
    protected bool $closed;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function getProformaInvoiceCode(): ?string
    {
        return $this->proformaInvoiceCode;
    }

    public function setProformaInvoiceCode(?string $proformaInvoiceCode): static
    {
        $this->proformaInvoiceCode = $proformaInvoiceCode;
        return $this;
    }

    public function getIssueDate(): TypeDateTimeNullable
    {
        return $this->issueDate;
    }

    public function setIssueDate(TypeDateTimeNullable $issueDate): static
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    public function getBillFullName(): ?string
    {
        return $this->billFullName;
    }

    public function setBillFullName(?string $billFullName): static
    {
        $this->billFullName = $billFullName;
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

    public function isIsValid(): bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): static
    {
        $this->isValid = $isValid;
        return $this;
    }

    public function getVatMode(): ?string
    {
        return $this->vatMode;
    }

    public function setVatMode(?string $vatMode): static
    {
        $this->vatMode = $vatMode;
        return $this;
    }

    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    public function setInvoiceCode(?string $invoiceCode): static
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    public function isClosed(): bool
    {
        return $this->closed;
    }

    public function setClosed(bool $closed): static
    {
        $this->closed = $closed;
        return $this;
    }
}

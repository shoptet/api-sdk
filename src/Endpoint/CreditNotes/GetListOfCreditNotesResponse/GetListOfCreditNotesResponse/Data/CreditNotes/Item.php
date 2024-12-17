<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfCreditNotesResponse\GetListOfCreditNotesResponse\Data\CreditNotes;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Price;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Item extends Entity
{
    protected string $code;
    protected ?float $varSymbol;
    protected bool $isValid;
    protected ?string $invoiceCode;
    protected ?string $proofPaymentCode;
    protected ?string $orderCode;
    protected TypeDateTime $creationTime;
    protected ?string $billCompany;
    protected ?string $billFullName;
    protected Price $price;
    protected TypeDateTime $changeTime;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function isIsValid(): bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): static
    {
        $this->isValid = $isValid;
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

    public function getProofPaymentCode(): ?string
    {
        return $this->proofPaymentCode;
    }

    public function setProofPaymentCode(?string $proofPaymentCode): static
    {
        $this->proofPaymentCode = $proofPaymentCode;
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

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getBillCompany(): ?string
    {
        return $this->billCompany;
    }

    public function setBillCompany(?string $billCompany): static
    {
        $this->billCompany = $billCompany;
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

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getChangeTime(): TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }
}

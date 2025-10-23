<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoicesResponse\GetListOfInvoicesResponse\Data\Invoices;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Price;
use Shoptet\Api\Sdk\Php\Component\Entity\ProformaInvoiceCodes;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Item extends Entity
{
    protected string $code;
    protected ?float $varSymbol;
    protected bool $isValid;
    protected ProformaInvoiceCodes $proformaInvoiceCodes;
    protected ?string $orderCode;
    protected TypeDateTimeNullable $creationTime;
    protected ?string $billCompany;
    protected ?string $billFullName;
    protected Price $price;
    protected ?TypeDateTimeNullable $changeTime;
    protected ?TypeDateNullable $dueDate;
    protected ?TypeDateNullable $taxDate;

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

    public function getProformaInvoiceCodes(): ProformaInvoiceCodes
    {
        return $this->proformaInvoiceCodes;
    }

    public function setProformaInvoiceCodes(ProformaInvoiceCodes $proformaInvoiceCodes): static
    {
        $this->proformaInvoiceCodes = $proformaInvoiceCodes;
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

    public function getCreationTime(): TypeDateTimeNullable
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTimeNullable $creationTime): static
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

    public function getChangeTime(): ?TypeDateTimeNullable
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTimeNullable $changeTime): static
    {
        $this->changeTime = $changeTime;
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
}

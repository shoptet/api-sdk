<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderRequest\CreateProformaInvoiceFromOrderRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbolNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Data extends Entity
{
    protected ?string $proformaInvoiceCode;
    protected ?int $varSymbol;
    protected ?TypeDateTimeNullable $creationTime;
    protected ?TypeDateNullable $dueDate;
    protected ?TypeConstSymbolNullable $constSymbol;
    protected ?int $specSymbol;
    protected ?int $billingMethodId;

    public function getProformaInvoiceCode(): ?string
    {
        return $this->proformaInvoiceCode;
    }

    public function setProformaInvoiceCode(?string $proformaInvoiceCode): static
    {
        $this->proformaInvoiceCode = $proformaInvoiceCode;
        return $this;
    }

    public function getVarSymbol(): ?int
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(?int $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
        return $this;
    }

    public function getCreationTime(): ?TypeDateTimeNullable
    {
        return $this->creationTime;
    }

    public function setCreationTime(?TypeDateTimeNullable $creationTime): static
    {
        $this->creationTime = $creationTime;
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

    public function getConstSymbol(): ?TypeConstSymbolNullable
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?TypeConstSymbolNullable $constSymbol): static
    {
        $this->constSymbol = $constSymbol;
        return $this;
    }

    public function getSpecSymbol(): ?int
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?int $specSymbol): static
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

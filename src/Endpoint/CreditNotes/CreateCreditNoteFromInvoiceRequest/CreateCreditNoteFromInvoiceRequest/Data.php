<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbol;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest\Data\Items;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest\Data\UseItemIds;

class Data extends Entity
{
    protected ?string $creditNoteCode;
    protected ?float $varSymbol;
    protected ?TypeDate $dueDate;
    protected ?TypeDate $taxDate;
    protected ?TypeConstSymbol $constSymbol;
    protected ?float $specSymbol;
    protected ?float $billingMethodId;
    protected ?string $orderCode;

    /** @deprecated */
    protected ?UseItemIds $useItemIds;
    protected ?Items $items;

    public function getCreditNoteCode(): ?string
    {
        return $this->creditNoteCode;
    }

    public function setCreditNoteCode(?string $creditNoteCode): static
    {
        $this->creditNoteCode = $creditNoteCode;
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

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getUseItemIds(): ?UseItemIds
    {
        return $this->useItemIds;
    }

    /**
     * @deprecated
     */
    public function setUseItemIds(?UseItemIds $useItemIds): static
    {
        $this->useItemIds = $useItemIds;
        return $this;
    }

    public function getItems(): ?Items
    {
        return $this->items;
    }

    public function setItems(?Items $items): static
    {
        $this->items = $items;
        return $this;
    }
}

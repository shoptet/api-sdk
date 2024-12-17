<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetCreditNoteDetailResponse\GetCreditNoteDetailResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Address;
use Shoptet\Api\Sdk\Php\Component\Entity\BillingAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\BillingMethod;
use Shoptet\Api\Sdk\Php\Component\Entity\DocumentCustomer;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Eshop;
use Shoptet\Api\Sdk\Php\Component\Entity\Price;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeightUnlimited;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetCreditNoteDetailResponse\GetCreditNoteDetailResponse\Data\CreditNote\Items;

class CreditNote extends Entity
{
    protected string $code;
    protected bool $isValid;
    protected ?string $invoiceCode;
    protected ?string $orderCode;
    protected ?string $proofPaymentCode;
    protected TypeDateTime $creationTime;
    protected TypeDateTime $changeTime;
    protected ?TypeDate $dueDate;
    protected ?TypeDate $taxDate;
    protected float $varSymbol;
    protected ?int $constSymbol;
    protected ?float $specSymbol;
    protected ?bool $restocked;
    protected ?string $stockAmountChangeType;
    protected ?TypeWeightUnlimited $weight;
    protected ?TypeWeightUnlimited $completePackageWeight;
    protected BillingMethod $billingMethod;
    protected BillingAddress $billingAddress;
    protected ?Address $deliveryAddress;
    protected bool $addressesEqual;
    protected Price $price;
    protected DocumentCustomer $customer;
    protected Eshop $eshop;
    protected Items $items;
    protected ?string $documentRemark;
    protected bool $vatPayer;
    protected ?string $vatMode;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
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

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
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

    public function getVarSymbol(): float
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(float $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
        return $this;
    }

    public function getConstSymbol(): ?int
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?int $constSymbol): static
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

    public function getRestocked(): ?bool
    {
        return $this->restocked;
    }

    public function setRestocked(?bool $restocked): static
    {
        $this->restocked = $restocked;
        return $this;
    }

    public function getStockAmountChangeType(): ?string
    {
        return $this->stockAmountChangeType;
    }

    public function setStockAmountChangeType(?string $stockAmountChangeType): static
    {
        $this->stockAmountChangeType = $stockAmountChangeType;
        return $this;
    }

    public function getWeight(): ?TypeWeightUnlimited
    {
        return $this->weight;
    }

    public function setWeight(?TypeWeightUnlimited $weight): static
    {
        $this->weight = $weight;
        return $this;
    }

    public function getCompletePackageWeight(): ?TypeWeightUnlimited
    {
        return $this->completePackageWeight;
    }

    public function setCompletePackageWeight(?TypeWeightUnlimited $completePackageWeight): static
    {
        $this->completePackageWeight = $completePackageWeight;
        return $this;
    }

    public function getBillingMethod(): BillingMethod
    {
        return $this->billingMethod;
    }

    public function setBillingMethod(BillingMethod $billingMethod): static
    {
        $this->billingMethod = $billingMethod;
        return $this;
    }

    public function getBillingAddress(): BillingAddress
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(BillingAddress $billingAddress): static
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?Address $deliveryAddress): static
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function isAddressesEqual(): bool
    {
        return $this->addressesEqual;
    }

    public function setAddressesEqual(bool $addressesEqual): static
    {
        $this->addressesEqual = $addressesEqual;
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

    public function getCustomer(): DocumentCustomer
    {
        return $this->customer;
    }

    public function setCustomer(DocumentCustomer $customer): static
    {
        $this->customer = $customer;
        return $this;
    }

    public function getEshop(): Eshop
    {
        return $this->eshop;
    }

    public function setEshop(Eshop $eshop): static
    {
        $this->eshop = $eshop;
        return $this;
    }

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): static
    {
        $this->items = $items;
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

    public function isVatPayer(): bool
    {
        return $this->vatPayer;
    }

    public function setVatPayer(bool $vatPayer): static
    {
        $this->vatPayer = $vatPayer;
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
}

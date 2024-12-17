<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItemRequest\UpdateCreditNoteItemRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeightRequest;

class Data extends Entity
{
    protected ?string $code;
    protected ?TypeAmount $amount;
    protected ?string $name;
    protected ?string $variantName;
    protected ?string $amountUnit;
    protected ?string $price;
    protected ?bool $includingVat;
    protected ?TypeVatRate $vatRate;
    protected ?TypePriceRatio $priceRatio;
    protected ?TypeWeightRequest $weight;
    protected ?string $remark;
    protected ?string $additionalField;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getAmount(): ?TypeAmount
    {
        return $this->amount;
    }

    public function setAmount(?TypeAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getVariantName(): ?string
    {
        return $this->variantName;
    }

    public function setVariantName(?string $variantName): static
    {
        $this->variantName = $variantName;
        return $this;
    }

    public function getAmountUnit(): ?string
    {
        return $this->amountUnit;
    }

    public function setAmountUnit(?string $amountUnit): static
    {
        $this->amountUnit = $amountUnit;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getIncludingVat(): ?bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(?bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }

    public function getVatRate(): ?TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(?TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getPriceRatio(): ?TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(?TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getWeight(): ?TypeWeightRequest
    {
        return $this->weight;
    }

    public function setWeight(?TypeWeightRequest $weight): static
    {
        $this->weight = $weight;
        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getAdditionalField(): ?string
    {
        return $this->additionalField;
    }

    public function setAdditionalField(?string $additionalField): static
    {
        $this->additionalField = $additionalField;
        return $this;
    }
}

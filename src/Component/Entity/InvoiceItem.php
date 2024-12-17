<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\InvoiceItem\DisplayPrices;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeight;

class InvoiceItem extends Entity
{
    protected ?TypeGuidUnlimited $productGuid;
    protected float $itemId;
    protected ?string $code;
    protected string $itemType;
    protected ?string $name;
    protected ?string $variantName;
    protected ?string $brand;
    protected TypeAmount $amount;
    protected ?string $amountUnit;
    protected ?string $remark;
    protected TypePriceRatio $priceRatio;
    protected ?TypeWeight $weight;
    protected ?string $additionalField;
    protected ItemPrice $itemPrice;
    protected ?ItemPrice $buyPrice;
    protected ?DisplayPrices $displayPrices;
    protected ?RecyclingFee $recyclingFee;
    protected ?ItemSurchargeParameters $surchargeParameters;
    protected ?ItemSpecificSurchargeParameters $specificSurchargeParameters;

    public function getProductGuid(): ?TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getItemId(): float
    {
        return $this->itemId;
    }

    public function setItemId(float $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getItemType(): string
    {
        return $this->itemType;
    }

    public function setItemType(string $itemType): static
    {
        $this->itemType = $itemType;
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

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): static
    {
        $this->brand = $brand;
        return $this;
    }

    public function getAmount(): TypeAmount
    {
        return $this->amount;
    }

    public function setAmount(TypeAmount $amount): static
    {
        $this->amount = $amount;
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

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getPriceRatio(): TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getWeight(): ?TypeWeight
    {
        return $this->weight;
    }

    public function setWeight(?TypeWeight $weight): static
    {
        $this->weight = $weight;
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

    public function getItemPrice(): ItemPrice
    {
        return $this->itemPrice;
    }

    public function setItemPrice(ItemPrice $itemPrice): static
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    public function getBuyPrice(): ?ItemPrice
    {
        return $this->buyPrice;
    }

    public function setBuyPrice(?ItemPrice $buyPrice): static
    {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    public function getDisplayPrices(): ?DisplayPrices
    {
        return $this->displayPrices;
    }

    public function setDisplayPrices(?DisplayPrices $displayPrices): static
    {
        $this->displayPrices = $displayPrices;
        return $this;
    }

    public function getRecyclingFee(): ?RecyclingFee
    {
        return $this->recyclingFee;
    }

    public function setRecyclingFee(?RecyclingFee $recyclingFee): static
    {
        $this->recyclingFee = $recyclingFee;
        return $this;
    }

    public function getSurchargeParameters(): ?ItemSurchargeParameters
    {
        return $this->surchargeParameters;
    }

    public function setSurchargeParameters(?ItemSurchargeParameters $surchargeParameters): static
    {
        $this->surchargeParameters = $surchargeParameters;
        return $this;
    }

    public function getSpecificSurchargeParameters(): ?ItemSpecificSurchargeParameters
    {
        return $this->specificSurchargeParameters;
    }

    public function setSpecificSurchargeParameters(
        ?ItemSpecificSurchargeParameters $specificSurchargeParameters,
    ): static {
        $this->specificSurchargeParameters = $specificSurchargeParameters;
        return $this;
    }
}

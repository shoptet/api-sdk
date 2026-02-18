<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem\DisplayPrices;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem\ItemPriceVatBreakdown;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem\MainImage;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem\Status;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem\SurchargeParametersTexts;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeight;

class OrderItem extends Entity
{
    protected ?TypeGuidUnlimited $productGuid;
    protected ?string $code;
    protected ?string $ean;
    protected string $itemType;
    protected ?string $productType;
    protected string $name;
    protected ?string $variantName;
    protected ?string $brand;
    protected ?string $remark;
    protected TypeWeight $weight;
    protected ?string $additionalField;
    protected TypeAmountNullable $amount;
    protected ?string $amountUnit;
    protected TypePriceRatio $priceRatio;
    protected Status $status;
    protected ItemPrice $itemPrice;
    protected ItemPrice $unitPrice;
    protected ?DisplayPrices $displayPrices;

    /** @deprecated */
    protected ?ItemPrice $buyPrice;
    protected ?ItemPrice $purchasePrice;
    protected RecyclingFee $recyclingFee;
    protected ?MainImage $mainImage;
    protected ?string $stockLocation;
    protected ?string $supplierName;
    protected int $itemId;
    protected ?string $warrantyDescription;

    /** @deprecated */
    protected TypePositiveAmountNullable $amountCompleted;

    /** @deprecated */
    protected ?SurchargeParametersTexts $surchargeParametersTexts;
    protected ?ItemSurchargeParameters $surchargeParameters;
    protected ?ItemSpecificSurchargeParameters $specificSurchargeParameters;
    protected ?ProductFlags $productFlags;
    protected ?DocumentConsumptionTax $consumptionTax;
    protected ?ItemPriceVatBreakdown $itemPriceVatBreakdown;

    public function getProductGuid(): ?TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
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

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): static
    {
        $this->ean = $ean;
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

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): static
    {
        $this->productType = $productType;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
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

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getWeight(): TypeWeight
    {
        return $this->weight;
    }

    public function setWeight(TypeWeight $weight): static
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

    public function getAmount(): TypeAmountNullable
    {
        return $this->amount;
    }

    public function setAmount(TypeAmountNullable $amount): static
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

    public function getPriceRatio(): TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): static
    {
        $this->status = $status;
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

    public function getUnitPrice(): ItemPrice
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(ItemPrice $unitPrice): static
    {
        $this->unitPrice = $unitPrice;
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

    /**
     * @deprecated
     */
    public function getBuyPrice(): ?ItemPrice
    {
        return $this->buyPrice;
    }

    /**
     * @deprecated
     */
    public function setBuyPrice(?ItemPrice $buyPrice): static
    {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    public function getPurchasePrice(): ?ItemPrice
    {
        return $this->purchasePrice;
    }

    public function setPurchasePrice(?ItemPrice $purchasePrice): static
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    public function getRecyclingFee(): RecyclingFee
    {
        return $this->recyclingFee;
    }

    public function setRecyclingFee(RecyclingFee $recyclingFee): static
    {
        $this->recyclingFee = $recyclingFee;
        return $this;
    }

    public function getMainImage(): ?MainImage
    {
        return $this->mainImage;
    }

    public function setMainImage(?MainImage $mainImage): static
    {
        $this->mainImage = $mainImage;
        return $this;
    }

    public function getStockLocation(): ?string
    {
        return $this->stockLocation;
    }

    public function setStockLocation(?string $stockLocation): static
    {
        $this->stockLocation = $stockLocation;
        return $this;
    }

    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    public function setSupplierName(?string $supplierName): static
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getWarrantyDescription(): ?string
    {
        return $this->warrantyDescription;
    }

    public function setWarrantyDescription(?string $warrantyDescription): static
    {
        $this->warrantyDescription = $warrantyDescription;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getAmountCompleted(): TypePositiveAmountNullable
    {
        return $this->amountCompleted;
    }

    /**
     * @deprecated
     */
    public function setAmountCompleted(TypePositiveAmountNullable $amountCompleted): static
    {
        $this->amountCompleted = $amountCompleted;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getSurchargeParametersTexts(): ?SurchargeParametersTexts
    {
        return $this->surchargeParametersTexts;
    }

    /**
     * @deprecated
     */
    public function setSurchargeParametersTexts(?SurchargeParametersTexts $surchargeParametersTexts): static
    {
        $this->surchargeParametersTexts = $surchargeParametersTexts;
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

    public function getProductFlags(): ?ProductFlags
    {
        return $this->productFlags;
    }

    public function setProductFlags(?ProductFlags $productFlags): static
    {
        $this->productFlags = $productFlags;
        return $this;
    }

    public function getConsumptionTax(): ?DocumentConsumptionTax
    {
        return $this->consumptionTax;
    }

    public function setConsumptionTax(?DocumentConsumptionTax $consumptionTax): static
    {
        $this->consumptionTax = $consumptionTax;
        return $this;
    }

    public function getItemPriceVatBreakdown(): ?ItemPriceVatBreakdown
    {
        return $this->itemPriceVatBreakdown;
    }

    public function setItemPriceVatBreakdown(?ItemPriceVatBreakdown $itemPriceVatBreakdown): static
    {
        $this->itemPriceVatBreakdown = $itemPriceVatBreakdown;
        return $this;
    }
}

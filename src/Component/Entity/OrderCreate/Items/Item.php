<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate\Items\Item\SurchargeParameters;
use Shoptet\Api\Sdk\Php\Component\ValueObject\ConsumptionTaxId;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;

class Item extends Entity
{
    protected string $itemType;
    protected ?string $name;
    protected ?string $variantName;
    protected ?string $brand;
    protected ?string $supplierName;
    protected ?TypeGuid $productGuid;
    protected ?string $code;
    protected ?string $remark;
    protected ?string $warrantyDescription;
    protected ?TypePositiveAmountNullable $amountCompleted;
    protected ?string $additionalField;
    protected ?string $amount;
    protected ?string $amountUnit;
    protected ?string $weight;
    protected ?string $priceRatio;
    protected string $vatRate;

    /** @deprecated */
    protected ?string $itemPriceWithVat;

    /** @deprecated */
    protected ?string $itemPriceWithoutVat;
    protected ?string $unitPriceWithVat;
    protected ?string $unitPriceWithoutVat;
    protected ?string $buyPriceWithVat;
    protected ?string $buyPriceWithoutVat;
    protected ?string $buyPriceVatRate;
    protected ?int $statusId;
    protected ?int $recyclingFeeId;
    protected ?SurchargeParameters $surchargeParameters;
    protected ?ConsumptionTaxId $consumptionTaxId;

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

    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    public function setSupplierName(?string $supplierName): static
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    public function getProductGuid(): ?TypeGuid
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuid $productGuid): static
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

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
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

    public function getAmountCompleted(): ?TypePositiveAmountNullable
    {
        return $this->amountCompleted;
    }

    public function setAmountCompleted(?TypePositiveAmountNullable $amountCompleted): static
    {
        $this->amountCompleted = $amountCompleted;
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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): static
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

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): static
    {
        $this->weight = $weight;
        return $this;
    }

    public function getPriceRatio(): ?string
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(?string $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getVatRate(): string
    {
        return $this->vatRate;
    }

    public function setVatRate(string $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getItemPriceWithVat(): ?string
    {
        return $this->itemPriceWithVat;
    }

    /**
     * @deprecated
     */
    public function setItemPriceWithVat(?string $itemPriceWithVat): static
    {
        $this->itemPriceWithVat = $itemPriceWithVat;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getItemPriceWithoutVat(): ?string
    {
        return $this->itemPriceWithoutVat;
    }

    /**
     * @deprecated
     */
    public function setItemPriceWithoutVat(?string $itemPriceWithoutVat): static
    {
        $this->itemPriceWithoutVat = $itemPriceWithoutVat;
        return $this;
    }

    public function getUnitPriceWithVat(): ?string
    {
        return $this->unitPriceWithVat;
    }

    public function setUnitPriceWithVat(?string $unitPriceWithVat): static
    {
        $this->unitPriceWithVat = $unitPriceWithVat;
        return $this;
    }

    public function getUnitPriceWithoutVat(): ?string
    {
        return $this->unitPriceWithoutVat;
    }

    public function setUnitPriceWithoutVat(?string $unitPriceWithoutVat): static
    {
        $this->unitPriceWithoutVat = $unitPriceWithoutVat;
        return $this;
    }

    public function getBuyPriceWithVat(): ?string
    {
        return $this->buyPriceWithVat;
    }

    public function setBuyPriceWithVat(?string $buyPriceWithVat): static
    {
        $this->buyPriceWithVat = $buyPriceWithVat;
        return $this;
    }

    public function getBuyPriceWithoutVat(): ?string
    {
        return $this->buyPriceWithoutVat;
    }

    public function setBuyPriceWithoutVat(?string $buyPriceWithoutVat): static
    {
        $this->buyPriceWithoutVat = $buyPriceWithoutVat;
        return $this;
    }

    public function getBuyPriceVatRate(): ?string
    {
        return $this->buyPriceVatRate;
    }

    public function setBuyPriceVatRate(?string $buyPriceVatRate): static
    {
        $this->buyPriceVatRate = $buyPriceVatRate;
        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(?int $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }

    public function getRecyclingFeeId(): ?int
    {
        return $this->recyclingFeeId;
    }

    public function setRecyclingFeeId(?int $recyclingFeeId): static
    {
        $this->recyclingFeeId = $recyclingFeeId;
        return $this;
    }

    public function getSurchargeParameters(): ?SurchargeParameters
    {
        return $this->surchargeParameters;
    }

    public function setSurchargeParameters(?SurchargeParameters $surchargeParameters): static
    {
        $this->surchargeParameters = $surchargeParameters;
        return $this;
    }

    public function getConsumptionTaxId(): ?ConsumptionTaxId
    {
        return $this->consumptionTaxId;
    }

    public function setConsumptionTaxId(?ConsumptionTaxId $consumptionTaxId): static
    {
        $this->consumptionTaxId = $consumptionTaxId;
        return $this;
    }
}

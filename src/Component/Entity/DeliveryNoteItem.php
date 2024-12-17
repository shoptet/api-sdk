<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeight;

class DeliveryNoteItem extends Entity
{
    protected ?TypeGuidUnlimited $productGuid;
    protected string $itemType;
    protected ?string $name;
    protected ?string $variantName;
    protected ?string $brand;
    protected TypeAmount $amount;
    protected ?string $amountUnit;
    protected ?string $remark;
    protected ?TypeWeight $weight;
    protected ?string $code;
    protected ?ItemSurchargeParametersWithoutPrice $surchargeParameters;
    protected ?ItemSpecificSurchargeParametersWithoutPrice $specificSurchargeParameters;

    public function getProductGuid(): ?TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
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

    public function getWeight(): ?TypeWeight
    {
        return $this->weight;
    }

    public function setWeight(?TypeWeight $weight): static
    {
        $this->weight = $weight;
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

    public function getSurchargeParameters(): ?ItemSurchargeParametersWithoutPrice
    {
        return $this->surchargeParameters;
    }

    public function setSurchargeParameters(?ItemSurchargeParametersWithoutPrice $surchargeParameters): static
    {
        $this->surchargeParameters = $surchargeParameters;
        return $this;
    }

    public function getSpecificSurchargeParameters(): ?ItemSpecificSurchargeParametersWithoutPrice
    {
        return $this->specificSurchargeParameters;
    }

    public function setSpecificSurchargeParameters(
        ?ItemSpecificSurchargeParametersWithoutPrice $specificSurchargeParameters,
    ): static {
        $this->specificSurchargeParameters = $specificSurchargeParameters;
        return $this;
    }
}

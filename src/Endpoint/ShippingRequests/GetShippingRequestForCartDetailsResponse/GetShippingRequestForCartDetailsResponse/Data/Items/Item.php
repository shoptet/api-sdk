<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse\Data\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\BrandNamed;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeight;

class Item extends Entity
{
    protected TypeGuidUnlimited $productGuid;
    protected string $code;
    protected string $itemType;
    protected string $name;
    protected string $variantName;
    protected ?BrandNamed $brand;
    protected TypeWeight $weight;
    protected TypePositiveAmount $amount;
    protected ?string $amountUnit;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getVariantName(): string
    {
        return $this->variantName;
    }

    public function setVariantName(string $variantName): static
    {
        $this->variantName = $variantName;
        return $this;
    }

    public function getBrand(): ?BrandNamed
    {
        return $this->brand;
    }

    public function setBrand(?BrandNamed $brand): static
    {
        $this->brand = $brand;
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

    public function getAmount(): TypePositiveAmount
    {
        return $this->amount;
    }

    public function setAmount(TypePositiveAmount $amount): static
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
}

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Order\Completion;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;

class Item extends Entity
{
    protected ?TypeGuidUnlimited $productGuid;
    protected ?string $code;
    protected string $itemType;
    protected string $name;
    protected ?string $variantName;
    protected TypeAmountNullable $amount;
    protected ?string $amountUnit;
    protected ?int $itemId;
    protected TypePositiveAmountNullable $amountCompleted;
    protected ?int $parentProductSetItemId;

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

    public function getVariantName(): ?string
    {
        return $this->variantName;
    }

    public function setVariantName(?string $variantName): static
    {
        $this->variantName = $variantName;
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

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(?int $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getAmountCompleted(): TypePositiveAmountNullable
    {
        return $this->amountCompleted;
    }

    public function setAmountCompleted(TypePositiveAmountNullable $amountCompleted): static
    {
        $this->amountCompleted = $amountCompleted;
        return $this;
    }

    public function getParentProductSetItemId(): ?int
    {
        return $this->parentProductSetItemId;
    }

    public function setParentProductSetItemId(?int $parentProductSetItemId): static
    {
        $this->parentProductSetItemId = $parentProductSetItemId;
        return $this;
    }
}

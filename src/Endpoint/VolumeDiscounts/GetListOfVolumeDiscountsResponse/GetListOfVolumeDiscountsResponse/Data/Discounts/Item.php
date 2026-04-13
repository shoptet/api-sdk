<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VolumeDiscounts\GetListOfVolumeDiscountsResponse\GetListOfVolumeDiscountsResponse\Data\Discounts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCodeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Endpoint\VolumeDiscounts\GetListOfVolumeDiscountsResponse\GetListOfVolumeDiscountsResponse\Data\Discounts\Item\CustomerGroups;

class Item extends Entity
{
    protected int $id;
    protected TypeAmount $amount;
    protected ?TypePriceRatio $priceRatio;
    protected TypeCurrencyCodeNullable $currency;
    protected ?CustomerGroups $customerGroups;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getPriceRatio(): ?TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(?TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getCurrency(): TypeCurrencyCodeNullable
    {
        return $this->currency;
    }

    public function setCurrency(TypeCurrencyCodeNullable $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCustomerGroups(): ?CustomerGroups
    {
        return $this->customerGroups;
    }

    public function setCustomerGroups(?CustomerGroups $customerGroups): static
    {
        $this->customerGroups = $customerGroups;
        return $this;
    }
}

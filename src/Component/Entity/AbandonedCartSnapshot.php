<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\AbandonedCartSnapshot\Coupon;
use Shoptet\Api\Sdk\Php\Component\Entity\AbandonedCartSnapshot\Customer;
use Shoptet\Api\Sdk\Php\Component\Entity\AbandonedCartSnapshot\Items;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class AbandonedCartSnapshot extends Entity
{
    protected TypeDateTime $date;
    protected int $age;
    protected Items $items;
    protected TypePrice $cartValue;
    protected ?Coupon $coupon;
    protected Customer $customer;
    protected int $returns;
    protected int $lastStep;

    public function getDate(): TypeDateTime
    {
        return $this->date;
    }

    public function setDate(TypeDateTime $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;
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

    public function getCartValue(): TypePrice
    {
        return $this->cartValue;
    }

    public function setCartValue(TypePrice $cartValue): static
    {
        $this->cartValue = $cartValue;
        return $this;
    }

    public function getCoupon(): ?Coupon
    {
        return $this->coupon;
    }

    public function setCoupon(?Coupon $coupon): static
    {
        $this->coupon = $coupon;
        return $this;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): static
    {
        $this->customer = $customer;
        return $this;
    }

    public function getReturns(): int
    {
        return $this->returns;
    }

    public function setReturns(int $returns): static
    {
        $this->returns = $returns;
        return $this;
    }

    public function getLastStep(): int
    {
        return $this->lastStep;
    }

    public function setLastStep(int $lastStep): static
    {
        $this->lastStep = $lastStep;
        return $this;
    }
}

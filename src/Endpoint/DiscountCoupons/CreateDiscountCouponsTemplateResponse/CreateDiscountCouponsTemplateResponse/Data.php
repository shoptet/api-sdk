<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse\Data\Brands;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse\Data\Categories;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse\Data\CustomerGroup;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse\Data\ProductFlags;

class Data extends Entity
{
    protected TypeGuid $guid;
    protected string $title;
    protected ?CustomerGroup $customerGroup;
    protected ?Categories $categories;
    protected ?Brands $brands;
    protected ?ProductFlags $productFlags;

    public function getGuid(): TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getCustomerGroup(): ?CustomerGroup
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroup $customerGroup): static
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): static
    {
        $this->categories = $categories;
        return $this;
    }

    public function getBrands(): ?Brands
    {
        return $this->brands;
    }

    public function setBrands(?Brands $brands): static
    {
        $this->brands = $brands;
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
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse\Data\Brands;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse\Data\Categories;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse\Data\CustomerGroup;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse\Data\ProductFlags;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDiscountCouponsTemplateResponse\GetDiscountCouponsTemplateResponse\Data\Products;

class Data extends Entity
{
    protected TypeGuid $guid;
    protected string $title;
    protected ?CustomerGroup $customerGroup;
    protected ?Categories $categories;
    protected ?Brands $brands;
    protected ?ProductFlags $productFlags;
    protected string $productSelectionMode;
    protected ?Products $products;

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

    public function getProductSelectionMode(): string
    {
        return $this->productSelectionMode;
    }

    public function setProductSelectionMode(string $productSelectionMode): static
    {
        $this->productSelectionMode = $productSelectionMode;
        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): static
    {
        $this->products = $products;
        return $this;
    }
}

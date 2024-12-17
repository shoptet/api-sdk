<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateRequest\CreateDiscountCouponsTemplateRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateRequest\CreateDiscountCouponsTemplateRequest\Data\Brands;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateRequest\CreateDiscountCouponsTemplateRequest\Data\CategoryGuids;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateRequest\CreateDiscountCouponsTemplateRequest\Data\ProductFlags;

class Data extends Entity
{
    protected ?TypeGuid $guid;
    protected string $title;
    protected ?int $customerGroupId;
    protected ?CategoryGuids $categoryGuids;
    protected ?Brands $brands;
    protected ?ProductFlags $productFlags;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
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

    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }

    public function setCustomerGroupId(?int $customerGroupId): static
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }

    public function getCategoryGuids(): ?CategoryGuids
    {
        return $this->categoryGuids;
    }

    public function setCategoryGuids(?CategoryGuids $categoryGuids): static
    {
        $this->categoryGuids = $categoryGuids;
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

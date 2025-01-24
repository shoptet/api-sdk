<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategoryRequest\CreateProductCategoryRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeFilename;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class Data extends Entity
{
    protected ?TypeGuid $guid;
    protected string $name;
    protected ?TypeGuid $parentGuid;
    protected ?string $description;
    protected ?string $secondDescription;

    /** @deprecated */
    protected ?string $imageName;
    protected ?TypeFilename $sourceImageName;
    protected ?TypeGuid $sortBefore;
    protected ?TypeGuid $sortAfter;
    protected ?string $indexName;
    protected ?string $menuTitle;
    protected ?string $title;
    protected ?string $metaTagDescription;
    protected ?bool $visible;
    protected ?string $customerVisibility;
    protected ?string $productOrdering;
    protected ?TypeGuid $similarProductsCategory;
    protected ?TypeGuid $relatedProductsCategory;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
    {
        $this->guid = $guid;
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

    public function getParentGuid(): ?TypeGuid
    {
        return $this->parentGuid;
    }

    public function setParentGuid(?TypeGuid $parentGuid): static
    {
        $this->parentGuid = $parentGuid;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getSecondDescription(): ?string
    {
        return $this->secondDescription;
    }

    public function setSecondDescription(?string $secondDescription): static
    {
        $this->secondDescription = $secondDescription;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @deprecated
     */
    public function setImageName(?string $imageName): static
    {
        $this->imageName = $imageName;
        return $this;
    }

    public function getSourceImageName(): ?TypeFilename
    {
        return $this->sourceImageName;
    }

    public function setSourceImageName(?TypeFilename $sourceImageName): static
    {
        $this->sourceImageName = $sourceImageName;
        return $this;
    }

    public function getSortBefore(): ?TypeGuid
    {
        return $this->sortBefore;
    }

    public function setSortBefore(?TypeGuid $sortBefore): static
    {
        $this->sortBefore = $sortBefore;
        return $this;
    }

    public function getSortAfter(): ?TypeGuid
    {
        return $this->sortAfter;
    }

    public function setSortAfter(?TypeGuid $sortAfter): static
    {
        $this->sortAfter = $sortAfter;
        return $this;
    }

    public function getIndexName(): ?string
    {
        return $this->indexName;
    }

    public function setIndexName(?string $indexName): static
    {
        $this->indexName = $indexName;
        return $this;
    }

    public function getMenuTitle(): ?string
    {
        return $this->menuTitle;
    }

    public function setMenuTitle(?string $menuTitle): static
    {
        $this->menuTitle = $menuTitle;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getMetaTagDescription(): ?string
    {
        return $this->metaTagDescription;
    }

    public function setMetaTagDescription(?string $metaTagDescription): static
    {
        $this->metaTagDescription = $metaTagDescription;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getCustomerVisibility(): ?string
    {
        return $this->customerVisibility;
    }

    public function setCustomerVisibility(?string $customerVisibility): static
    {
        $this->customerVisibility = $customerVisibility;
        return $this;
    }

    public function getProductOrdering(): ?string
    {
        return $this->productOrdering;
    }

    public function setProductOrdering(?string $productOrdering): static
    {
        $this->productOrdering = $productOrdering;
        return $this;
    }

    public function getSimilarProductsCategory(): ?TypeGuid
    {
        return $this->similarProductsCategory;
    }

    public function setSimilarProductsCategory(?TypeGuid $similarProductsCategory): static
    {
        $this->similarProductsCategory = $similarProductsCategory;
        return $this;
    }

    public function getRelatedProductsCategory(): ?TypeGuid
    {
        return $this->relatedProductsCategory;
    }

    public function setRelatedProductsCategory(?TypeGuid $relatedProductsCategory): static
    {
        $this->relatedProductsCategory = $relatedProductsCategory;
        return $this;
    }
}

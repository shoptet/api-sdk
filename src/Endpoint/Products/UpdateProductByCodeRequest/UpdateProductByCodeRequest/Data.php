<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\CategoryGuids;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\DescriptiveParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\FilteringParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\Flags;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\RelatedVideos;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\SurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\Variants;

class Data extends Entity
{
    protected ?TypeGuid $guid;
    protected ?string $type;
    protected ?string $visibility;
    protected ?string $name;
    protected ?bool $adult;
    protected ?string $shortDescription;
    protected ?string $description;
    protected ?string $metaTitle;
    protected ?string $metaDescription;
    protected ?string $conditionGrade;
    protected ?string $conditionDescription;
    protected ?TypeGuid $defaultCategoryGuid;
    protected ?string $brandCode;
    protected ?string $internalNote;
    protected ?TypeGuid $supplierGuid;
    protected ?CategoryGuids $categoryGuids;
    protected ?int $warrantyId;
    protected ?Flags $flags;
    protected ?DescriptiveParameters $descriptiveParameters;
    protected ?FilteringParameters $filteringParameters;
    protected ?SurchargeParameters $surchargeParameters;
    protected ?Variants $variants;
    protected ?string $indexName;
    protected ?RelatedVideos $relatedVideos;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): static
    {
        $this->visibility = $visibility;
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

    public function getAdult(): ?bool
    {
        return $this->adult;
    }

    public function setAdult(?bool $adult): static
    {
        $this->adult = $adult;
        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): static
    {
        $this->shortDescription = $shortDescription;
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

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): static
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): static
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    public function getConditionGrade(): ?string
    {
        return $this->conditionGrade;
    }

    public function setConditionGrade(?string $conditionGrade): static
    {
        $this->conditionGrade = $conditionGrade;
        return $this;
    }

    public function getConditionDescription(): ?string
    {
        return $this->conditionDescription;
    }

    public function setConditionDescription(?string $conditionDescription): static
    {
        $this->conditionDescription = $conditionDescription;
        return $this;
    }

    public function getDefaultCategoryGuid(): ?TypeGuid
    {
        return $this->defaultCategoryGuid;
    }

    public function setDefaultCategoryGuid(?TypeGuid $defaultCategoryGuid): static
    {
        $this->defaultCategoryGuid = $defaultCategoryGuid;
        return $this;
    }

    public function getBrandCode(): ?string
    {
        return $this->brandCode;
    }

    public function setBrandCode(?string $brandCode): static
    {
        $this->brandCode = $brandCode;
        return $this;
    }

    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }

    public function setInternalNote(?string $internalNote): static
    {
        $this->internalNote = $internalNote;
        return $this;
    }

    public function getSupplierGuid(): ?TypeGuid
    {
        return $this->supplierGuid;
    }

    public function setSupplierGuid(?TypeGuid $supplierGuid): static
    {
        $this->supplierGuid = $supplierGuid;
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

    public function getWarrantyId(): ?int
    {
        return $this->warrantyId;
    }

    public function setWarrantyId(?int $warrantyId): static
    {
        $this->warrantyId = $warrantyId;
        return $this;
    }

    public function getFlags(): ?Flags
    {
        return $this->flags;
    }

    public function setFlags(?Flags $flags): static
    {
        $this->flags = $flags;
        return $this;
    }

    public function getDescriptiveParameters(): ?DescriptiveParameters
    {
        return $this->descriptiveParameters;
    }

    public function setDescriptiveParameters(?DescriptiveParameters $descriptiveParameters): static
    {
        $this->descriptiveParameters = $descriptiveParameters;
        return $this;
    }

    public function getFilteringParameters(): ?FilteringParameters
    {
        return $this->filteringParameters;
    }

    public function setFilteringParameters(?FilteringParameters $filteringParameters): static
    {
        $this->filteringParameters = $filteringParameters;
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

    public function getVariants(): ?Variants
    {
        return $this->variants;
    }

    public function setVariants(?Variants $variants): static
    {
        $this->variants = $variants;
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

    public function getRelatedVideos(): ?RelatedVideos
    {
        return $this->relatedVideos;
    }

    public function setRelatedVideos(?RelatedVideos $relatedVideos): static
    {
        $this->relatedVideos = $relatedVideos;
        return $this;
    }
}

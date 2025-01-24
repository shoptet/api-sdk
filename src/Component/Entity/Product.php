<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\Product\AlternativeProducts;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Categories;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\DefaultCategory;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\DescriptiveParameters;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\FilteringParameters;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Flags;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Images;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\RelatedFiles;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\RelatedProducts;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\RelatedVideos;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\SetItems;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\SurchargeParameters;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Warranty;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Product extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected string $type;
    protected ?string $name;
    protected ?BrandNamed $brand;
    protected ?Supplier $supplier;
    protected string $visibility;
    protected TypeDateTime $creationTime;
    protected ?TypeDateTime $changeTime;
    protected ?string $shortDescription;
    protected ?string $description;
    protected ?string $metaDescription;
    protected ?string $url;
    protected ?string $conditionGrade;
    protected ?string $conditionDescription;
    protected ?string $internalNote;
    protected DefaultCategory $defaultCategory;
    protected ?Categories $categories;
    protected ?DescriptiveParameters $descriptiveParameters;
    protected ?string $additionalName;
    protected ?string $xmlFeedName;
    protected ?string $metaTitle;
    protected ?bool $adult;

    /** @deprecated */
    protected ?bool $atypicalBilling;

    /** @deprecated */
    protected ?bool $atypicalShipping;
    protected ?bool $allowIPlatba;
    protected ?bool $allowOnlinePayments;
    protected ?string $sizeIdName;
    protected ?TypeAmount $voteAverageScore;
    protected ?int $voteCount;
    protected ?bool $isVariant;
    protected Variants $variants;
    protected ?Images $images;
    protected ?Flags $flags;
    protected ?SurchargeParameters $surchargeParameters;
    protected ?SetItems $setItems;
    protected ?FilteringParameters $filteringParameters;
    protected ?Warranty $warranty;
    protected ?ProductGifts $gifts;
    protected ?AlternativeProducts $alternativeProducts;
    protected ?RelatedProducts $relatedProducts;
    protected ?RelatedFiles $relatedFiles;
    protected ?RelatedVideos $relatedVideos;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
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

    public function getBrand(): ?BrandNamed
    {
        return $this->brand;
    }

    public function setBrand(?BrandNamed $brand): static
    {
        $this->brand = $brand;
        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): static
    {
        $this->supplier = $supplier;
        return $this;
    }

    public function getVisibility(): string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): static
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getChangeTime(): ?TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
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

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): static
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
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

    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }

    public function setInternalNote(?string $internalNote): static
    {
        $this->internalNote = $internalNote;
        return $this;
    }

    public function getDefaultCategory(): DefaultCategory
    {
        return $this->defaultCategory;
    }

    public function setDefaultCategory(DefaultCategory $defaultCategory): static
    {
        $this->defaultCategory = $defaultCategory;
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

    public function getDescriptiveParameters(): ?DescriptiveParameters
    {
        return $this->descriptiveParameters;
    }

    public function setDescriptiveParameters(?DescriptiveParameters $descriptiveParameters): static
    {
        $this->descriptiveParameters = $descriptiveParameters;
        return $this;
    }

    public function getAdditionalName(): ?string
    {
        return $this->additionalName;
    }

    public function setAdditionalName(?string $additionalName): static
    {
        $this->additionalName = $additionalName;
        return $this;
    }

    public function getXmlFeedName(): ?string
    {
        return $this->xmlFeedName;
    }

    public function setXmlFeedName(?string $xmlFeedName): static
    {
        $this->xmlFeedName = $xmlFeedName;
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

    public function getAdult(): ?bool
    {
        return $this->adult;
    }

    public function setAdult(?bool $adult): static
    {
        $this->adult = $adult;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getAtypicalBilling(): ?bool
    {
        return $this->atypicalBilling;
    }

    /**
     * @deprecated
     */
    public function setAtypicalBilling(?bool $atypicalBilling): static
    {
        $this->atypicalBilling = $atypicalBilling;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getAtypicalShipping(): ?bool
    {
        return $this->atypicalShipping;
    }

    /**
     * @deprecated
     */
    public function setAtypicalShipping(?bool $atypicalShipping): static
    {
        $this->atypicalShipping = $atypicalShipping;
        return $this;
    }

    public function getAllowIPlatba(): ?bool
    {
        return $this->allowIPlatba;
    }

    public function setAllowIPlatba(?bool $allowIPlatba): static
    {
        $this->allowIPlatba = $allowIPlatba;
        return $this;
    }

    public function getAllowOnlinePayments(): ?bool
    {
        return $this->allowOnlinePayments;
    }

    public function setAllowOnlinePayments(?bool $allowOnlinePayments): static
    {
        $this->allowOnlinePayments = $allowOnlinePayments;
        return $this;
    }

    public function getSizeIdName(): ?string
    {
        return $this->sizeIdName;
    }

    public function setSizeIdName(?string $sizeIdName): static
    {
        $this->sizeIdName = $sizeIdName;
        return $this;
    }

    public function getVoteAverageScore(): ?TypeAmount
    {
        return $this->voteAverageScore;
    }

    public function setVoteAverageScore(?TypeAmount $voteAverageScore): static
    {
        $this->voteAverageScore = $voteAverageScore;
        return $this;
    }

    public function getVoteCount(): ?int
    {
        return $this->voteCount;
    }

    public function setVoteCount(?int $voteCount): static
    {
        $this->voteCount = $voteCount;
        return $this;
    }

    public function getIsVariant(): ?bool
    {
        return $this->isVariant;
    }

    public function setIsVariant(?bool $isVariant): static
    {
        $this->isVariant = $isVariant;
        return $this;
    }

    public function getVariants(): Variants
    {
        return $this->variants;
    }

    public function setVariants(Variants $variants): static
    {
        $this->variants = $variants;
        return $this;
    }

    public function getImages(): ?Images
    {
        return $this->images;
    }

    public function setImages(?Images $images): static
    {
        $this->images = $images;
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

    public function getSurchargeParameters(): ?SurchargeParameters
    {
        return $this->surchargeParameters;
    }

    public function setSurchargeParameters(?SurchargeParameters $surchargeParameters): static
    {
        $this->surchargeParameters = $surchargeParameters;
        return $this;
    }

    public function getSetItems(): ?SetItems
    {
        return $this->setItems;
    }

    public function setSetItems(?SetItems $setItems): static
    {
        $this->setItems = $setItems;
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

    public function getWarranty(): ?Warranty
    {
        return $this->warranty;
    }

    public function setWarranty(?Warranty $warranty): static
    {
        $this->warranty = $warranty;
        return $this;
    }

    public function getGifts(): ?ProductGifts
    {
        return $this->gifts;
    }

    public function setGifts(?ProductGifts $gifts): static
    {
        $this->gifts = $gifts;
        return $this;
    }

    public function getAlternativeProducts(): ?AlternativeProducts
    {
        return $this->alternativeProducts;
    }

    public function setAlternativeProducts(?AlternativeProducts $alternativeProducts): static
    {
        $this->alternativeProducts = $alternativeProducts;
        return $this;
    }

    public function getRelatedProducts(): ?RelatedProducts
    {
        return $this->relatedProducts;
    }

    public function setRelatedProducts(?RelatedProducts $relatedProducts): static
    {
        $this->relatedProducts = $relatedProducts;
        return $this;
    }

    public function getRelatedFiles(): ?RelatedFiles
    {
        return $this->relatedFiles;
    }

    public function setRelatedFiles(?RelatedFiles $relatedFiles): static
    {
        $this->relatedFiles = $relatedFiles;
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands\UpdateBrandRequest\UpdateBrandRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?string $name;
    protected ?string $indexName;
    protected ?string $brandWeb;
    protected ?string $postalAddress;
    protected ?string $contactEmail;
    protected ?string $europeanResellerPostalAddress;
    protected ?string $europeanResellerContactEmail;
    protected ?string $manufacturingCompanyName;
    protected ?string $europeanResellerManufacturingCompanyName;
    protected ?bool $showInCategoriesMenu;
    protected ?bool $showInBrandList;
    protected ?string $description;
    protected ?string $metaTitle;
    protected ?string $metaDescription;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
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

    public function getBrandWeb(): ?string
    {
        return $this->brandWeb;
    }

    public function setBrandWeb(?string $brandWeb): static
    {
        $this->brandWeb = $brandWeb;
        return $this;
    }

    public function getPostalAddress(): ?string
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?string $postalAddress): static
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): static
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    public function getEuropeanResellerPostalAddress(): ?string
    {
        return $this->europeanResellerPostalAddress;
    }

    public function setEuropeanResellerPostalAddress(?string $europeanResellerPostalAddress): static
    {
        $this->europeanResellerPostalAddress = $europeanResellerPostalAddress;
        return $this;
    }

    public function getEuropeanResellerContactEmail(): ?string
    {
        return $this->europeanResellerContactEmail;
    }

    public function setEuropeanResellerContactEmail(?string $europeanResellerContactEmail): static
    {
        $this->europeanResellerContactEmail = $europeanResellerContactEmail;
        return $this;
    }

    public function getManufacturingCompanyName(): ?string
    {
        return $this->manufacturingCompanyName;
    }

    public function setManufacturingCompanyName(?string $manufacturingCompanyName): static
    {
        $this->manufacturingCompanyName = $manufacturingCompanyName;
        return $this;
    }

    public function getEuropeanResellerManufacturingCompanyName(): ?string
    {
        return $this->europeanResellerManufacturingCompanyName;
    }

    public function setEuropeanResellerManufacturingCompanyName(
        ?string $europeanResellerManufacturingCompanyName,
    ): static {
        $this->europeanResellerManufacturingCompanyName = $europeanResellerManufacturingCompanyName;
        return $this;
    }

    public function getShowInCategoriesMenu(): ?bool
    {
        return $this->showInCategoriesMenu;
    }

    public function setShowInCategoriesMenu(?bool $showInCategoriesMenu): static
    {
        $this->showInCategoriesMenu = $showInCategoriesMenu;
        return $this;
    }

    public function getShowInBrandList(): ?bool
    {
        return $this->showInBrandList;
    }

    public function setShowInBrandList(?bool $showInBrandList): static
    {
        $this->showInBrandList = $showInBrandList;
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
}

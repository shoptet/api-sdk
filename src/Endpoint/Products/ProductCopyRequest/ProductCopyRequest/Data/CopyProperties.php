<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyRequest\ProductCopyRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CopyProperties extends Entity
{
    protected ?bool $generalData;
    protected ?bool $images;
    protected ?bool $images360;
    protected ?bool $pricelist;
    protected ?bool $categories;
    protected ?bool $properties;
    protected ?bool $related;
    protected ?bool $advanced;
    protected ?bool $stocks;
    protected ?bool $globalSaleVat;
    protected ?bool $zboziCzSettings;
    protected ?bool $heurekaSettings;
    protected ?bool $categoryPairing;

    public function getGeneralData(): ?bool
    {
        return $this->generalData;
    }

    public function setGeneralData(?bool $generalData): static
    {
        $this->generalData = $generalData;
        return $this;
    }

    public function getImages(): ?bool
    {
        return $this->images;
    }

    public function setImages(?bool $images): static
    {
        $this->images = $images;
        return $this;
    }

    public function getImages360(): ?bool
    {
        return $this->images360;
    }

    public function setImages360(?bool $images360): static
    {
        $this->images360 = $images360;
        return $this;
    }

    public function getPricelist(): ?bool
    {
        return $this->pricelist;
    }

    public function setPricelist(?bool $pricelist): static
    {
        $this->pricelist = $pricelist;
        return $this;
    }

    public function getCategories(): ?bool
    {
        return $this->categories;
    }

    public function setCategories(?bool $categories): static
    {
        $this->categories = $categories;
        return $this;
    }

    public function getProperties(): ?bool
    {
        return $this->properties;
    }

    public function setProperties(?bool $properties): static
    {
        $this->properties = $properties;
        return $this;
    }

    public function getRelated(): ?bool
    {
        return $this->related;
    }

    public function setRelated(?bool $related): static
    {
        $this->related = $related;
        return $this;
    }

    public function getAdvanced(): ?bool
    {
        return $this->advanced;
    }

    public function setAdvanced(?bool $advanced): static
    {
        $this->advanced = $advanced;
        return $this;
    }

    public function getStocks(): ?bool
    {
        return $this->stocks;
    }

    public function setStocks(?bool $stocks): static
    {
        $this->stocks = $stocks;
        return $this;
    }

    public function getGlobalSaleVat(): ?bool
    {
        return $this->globalSaleVat;
    }

    public function setGlobalSaleVat(?bool $globalSaleVat): static
    {
        $this->globalSaleVat = $globalSaleVat;
        return $this;
    }

    public function getZboziCzSettings(): ?bool
    {
        return $this->zboziCzSettings;
    }

    public function setZboziCzSettings(?bool $zboziCzSettings): static
    {
        $this->zboziCzSettings = $zboziCzSettings;
        return $this;
    }

    public function getHeurekaSettings(): ?bool
    {
        return $this->heurekaSettings;
    }

    public function setHeurekaSettings(?bool $heurekaSettings): static
    {
        $this->heurekaSettings = $heurekaSettings;
        return $this;
    }

    public function getCategoryPairing(): ?bool
    {
        return $this->categoryPairing;
    }

    public function setCategoryPairing(?bool $categoryPairing): static
    {
        $this->categoryPairing = $categoryPairing;
        return $this;
    }
}

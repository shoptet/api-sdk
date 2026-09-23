<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ProductImageBatchInsert\Images;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class ProductImageBatchInsert extends Entity
{
    protected TypeGuidUnlimited $productGuid;
    protected string $gallery;
    protected Images $images;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getGallery(): string
    {
        return $this->gallery;
    }

    public function setGallery(string $gallery): static
    {
        $this->gallery = $gallery;
        return $this;
    }

    public function getImages(): Images
    {
        return $this->images;
    }

    public function setImages(Images $images): static
    {
        $this->images = $images;
        return $this;
    }
}

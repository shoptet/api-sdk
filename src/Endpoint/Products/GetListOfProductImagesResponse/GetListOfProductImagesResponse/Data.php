<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductImagesResponse\GetListOfProductImagesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductImagesResponse\GetListOfProductImagesResponse\Data\Images;

class Data extends Entity
{
    protected Images $images;

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

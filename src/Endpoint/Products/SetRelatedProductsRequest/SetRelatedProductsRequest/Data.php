<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProductsRequest\SetRelatedProductsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProductsRequest\SetRelatedProductsRequest\Data\RelatedProducts;

class Data extends Entity
{
    protected RelatedProducts $relatedProducts;

    public function getRelatedProducts(): RelatedProducts
    {
        return $this->relatedProducts;
    }

    public function setRelatedProducts(RelatedProducts $relatedProducts): static
    {
        $this->relatedProducts = $relatedProducts;
        return $this;
    }
}

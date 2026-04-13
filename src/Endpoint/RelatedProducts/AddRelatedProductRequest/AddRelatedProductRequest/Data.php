<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\AddRelatedProductRequest\AddRelatedProductRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\AddRelatedProductRequest\AddRelatedProductRequest\Data\RelatedProduct;

class Data extends Entity
{
    protected RelatedProduct $relatedProduct;

    public function getRelatedProduct(): RelatedProduct
    {
        return $this->relatedProduct;
    }

    public function setRelatedProduct(RelatedProduct $relatedProduct): static
    {
        $this->relatedProduct = $relatedProduct;
        return $this;
    }
}

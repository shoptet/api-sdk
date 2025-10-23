<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductResponse\CreateProductResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Product;

class Data extends Entity
{
    protected Product $product;

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): static
    {
        $this->product = $product;
        return $this;
    }
}

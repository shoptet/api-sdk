<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductRequest\AddAlternativeProductRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductRequest\AddAlternativeProductRequest\Data\AlternativeProduct;

class Data extends Entity
{
    protected AlternativeProduct $alternativeProduct;

    public function getAlternativeProduct(): AlternativeProduct
    {
        return $this->alternativeProduct;
    }

    public function setAlternativeProduct(AlternativeProduct $alternativeProduct): static
    {
        $this->alternativeProduct = $alternativeProduct;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\SetAlternativeProductsRequest\SetAlternativeProductsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\SetAlternativeProductsRequest\SetAlternativeProductsRequest\Data\AlternativeProducts;

class Data extends Entity
{
    protected AlternativeProducts $alternativeProducts;

    public function getAlternativeProducts(): AlternativeProducts
    {
        return $this->alternativeProducts;
    }

    public function setAlternativeProducts(AlternativeProducts $alternativeProducts): static
    {
        $this->alternativeProducts = $alternativeProducts;
        return $this;
    }
}

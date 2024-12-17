<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse\Data\Products;

class Data extends Entity
{
    protected Products $products;
    protected Paginator $paginator;

    public function getProducts(): Products
    {
        return $this->products;
    }

    public function setProducts(Products $products): static
    {
        $this->products = $products;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategoryResponse\GetListOfProductsOrderInCategoryResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategoryResponse\GetListOfProductsOrderInCategoryResponse\Data\CategoryProducts;

class Data extends Entity
{
    protected CategoryProducts $categoryProducts;
    protected Paginator $paginator;

    public function getCategoryProducts(): CategoryProducts
    {
        return $this->categoryProducts;
    }

    public function setCategoryProducts(CategoryProducts $categoryProducts): static
    {
        $this->categoryProducts = $categoryProducts;
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

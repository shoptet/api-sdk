<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductCategoriesResponse\GetListOfProductCategoriesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductCategoriesResponse\GetListOfProductCategoriesResponse\Data\Categories;

class Data extends Entity
{
    protected Categories $categories;
    protected Paginator $paginator;

    public function getCategories(): Categories
    {
        return $this->categories;
    }

    public function setCategories(Categories $categories): static
    {
        $this->categories = $categories;
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

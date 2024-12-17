<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategoriesResponse\GetListOfParametricCategoriesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategoriesResponse\GetListOfParametricCategoriesResponse\Data\ParametricCategories;

class Data extends Entity
{
    protected ParametricCategories $parametricCategories;
    protected ?Paginator $paginator;

    public function getParametricCategories(): ParametricCategories
    {
        return $this->parametricCategories;
    }

    public function setParametricCategories(ParametricCategories $parametricCategories): static
    {
        $this->parametricCategories = $parametricCategories;
        return $this;
    }

    public function getPaginator(): ?Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(?Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

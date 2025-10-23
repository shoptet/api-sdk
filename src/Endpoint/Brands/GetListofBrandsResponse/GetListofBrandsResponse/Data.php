<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands\GetListofBrandsResponse\GetListofBrandsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\GetListofBrandsResponse\GetListofBrandsResponse\Data\Brands;

class Data extends Entity
{
    protected Brands $brands;
    protected Paginator $paginator;

    public function getBrands(): Brands
    {
        return $this->brands;
    }

    public function setBrands(Brands $brands): static
    {
        $this->brands = $brands;
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetailResponse\GetPricelistDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetailResponse\GetPricelistDetailResponse\Data\Pricelist;

class Data extends Entity
{
    protected Pricelist $pricelist;
    protected ?Paginator $paginator;

    public function getPricelist(): Pricelist
    {
        return $this->pricelist;
    }

    public function setPricelist(Pricelist $pricelist): static
    {
        $this->pricelist = $pricelist;
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

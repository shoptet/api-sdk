<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetailResponse\GetPricelistDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistDetail;

class Data extends Entity
{
    protected PricelistDetail $pricelist;
    protected ?Paginator $paginator;

    public function getPricelist(): PricelistDetail
    {
        return $this->pricelist;
    }

    public function setPricelist(PricelistDetail $pricelist): static
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

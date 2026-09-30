<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\GetPriceListPricesResponse\GetPriceListPricesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\GetPriceListPricesResponse\GetPriceListPricesResponse\Data\Prices;

class Data extends Entity
{
    protected Prices $prices;
    protected ?Paginator $paginator;

    public function getPrices(): Prices
    {
        return $this->prices;
    }

    public function setPrices(Prices $prices): static
    {
        $this->prices = $prices;
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

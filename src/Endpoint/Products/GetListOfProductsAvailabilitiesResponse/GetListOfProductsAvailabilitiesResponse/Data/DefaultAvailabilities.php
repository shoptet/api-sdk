<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class DefaultAvailabilities extends Entity
{
    protected ?int $onStock;
    protected ?int $soldOutNegativeStockAllowed;
    protected ?int $soldOutNegativeStockForbidden;

    public function getOnStock(): ?int
    {
        return $this->onStock;
    }

    public function setOnStock(?int $onStock): static
    {
        $this->onStock = $onStock;
        return $this;
    }

    public function getSoldOutNegativeStockAllowed(): ?int
    {
        return $this->soldOutNegativeStockAllowed;
    }

    public function setSoldOutNegativeStockAllowed(?int $soldOutNegativeStockAllowed): static
    {
        $this->soldOutNegativeStockAllowed = $soldOutNegativeStockAllowed;
        return $this;
    }

    public function getSoldOutNegativeStockForbidden(): ?int
    {
        return $this->soldOutNegativeStockForbidden;
    }

    public function setSoldOutNegativeStockForbidden(?int $soldOutNegativeStockForbidden): static
    {
        $this->soldOutNegativeStockForbidden = $soldOutNegativeStockForbidden;
        return $this;
    }
}

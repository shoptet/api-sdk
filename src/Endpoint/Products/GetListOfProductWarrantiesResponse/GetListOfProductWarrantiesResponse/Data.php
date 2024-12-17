<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse\Data\Warranties;

class Data extends Entity
{
    protected Warranties $warranties;

    public function getWarranties(): Warranties
    {
        return $this->warranties;
    }

    public function setWarranties(Warranties $warranties): static
    {
        $this->warranties = $warranties;
        return $this;
    }
}

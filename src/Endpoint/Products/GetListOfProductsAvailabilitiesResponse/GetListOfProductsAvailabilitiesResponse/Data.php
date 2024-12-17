<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse\Data\Availabilities;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse\Data\DefaultAvailabilities;

class Data extends Entity
{
    protected Availabilities $availabilities;
    protected DefaultAvailabilities $defaultAvailabilities;

    public function getAvailabilities(): Availabilities
    {
        return $this->availabilities;
    }

    public function setAvailabilities(Availabilities $availabilities): static
    {
        $this->availabilities = $availabilities;
        return $this;
    }

    public function getDefaultAvailabilities(): DefaultAvailabilities
    {
        return $this->defaultAvailabilities;
    }

    public function setDefaultAvailabilities(DefaultAvailabilities $defaultAvailabilities): static
    {
        $this->defaultAvailabilities = $defaultAvailabilities;
        return $this;
    }
}

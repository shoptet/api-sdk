<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\UpdateProductAvailabilityResponse\UpdateProductAvailabilityResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\UpdateProductAvailabilityResponse\UpdateProductAvailabilityResponse\Data\Availability;

class Data extends Entity
{
    protected Availability $availability;

    public function getAvailability(): Availability
    {
        return $this->availability;
    }

    public function setAvailability(Availability $availability): static
    {
        $this->availability = $availability;
        return $this;
    }
}

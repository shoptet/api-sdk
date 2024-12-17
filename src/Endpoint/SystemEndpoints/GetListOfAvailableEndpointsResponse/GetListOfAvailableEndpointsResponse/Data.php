<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpointsResponse\GetListOfAvailableEndpointsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpointsResponse\GetListOfAvailableEndpointsResponse\Data\Endpoints;

class Data extends Entity
{
    protected Endpoints $endpoints;

    public function getEndpoints(): Endpoints
    {
        return $this->endpoints;
    }

    public function setEndpoints(Endpoints $endpoints): static
    {
        $this->endpoints = $endpoints;
        return $this;
    }
}

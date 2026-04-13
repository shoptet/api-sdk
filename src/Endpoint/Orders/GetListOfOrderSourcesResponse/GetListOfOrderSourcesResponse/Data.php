<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderSourcesResponse\GetListOfOrderSourcesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderSourcesResponse\GetListOfOrderSourcesResponse\Data\Sources;

class Data extends Entity
{
    protected Sources $sources;

    public function getSources(): Sources
    {
        return $this->sources;
    }

    public function setSources(Sources $sources): static
    {
        $this->sources = $sources;
        return $this;
    }
}

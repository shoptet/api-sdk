<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfVariantParametersResponse\GetListOfVariantParametersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfVariantParametersResponse\GetListOfVariantParametersResponse\Data\Parameters;

class Data extends Entity
{
    protected Parameters $parameters;
    protected Paginator $paginator;

    public function getParameters(): Parameters
    {
        return $this->parameters;
    }

    public function setParameters(Parameters $parameters): static
    {
        $this->parameters = $parameters;
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

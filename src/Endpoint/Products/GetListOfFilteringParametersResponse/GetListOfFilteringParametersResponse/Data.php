<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfFilteringParametersResponse\GetListOfFilteringParametersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfFilteringParametersResponse\GetListOfFilteringParametersResponse\Data\FilteringParameters;

class Data extends Entity
{
    protected FilteringParameters $filteringParameters;
    protected Paginator $paginator;

    public function getFilteringParameters(): FilteringParameters
    {
        return $this->filteringParameters;
    }

    public function setFilteringParameters(FilteringParameters $filteringParameters): static
    {
        $this->filteringParameters = $filteringParameters;
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

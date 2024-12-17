<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfSurchargeParametersResponse\GetListOfSurchargeParametersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfSurchargeParametersResponse\GetListOfSurchargeParametersResponse\Data\SurchargeParameters;

class Data extends Entity
{
    protected SurchargeParameters $surchargeParameters;
    protected Paginator $paginator;

    public function getSurchargeParameters(): SurchargeParameters
    {
        return $this->surchargeParameters;
    }

    public function setSurchargeParameters(SurchargeParameters $surchargeParameters): static
    {
        $this->surchargeParameters = $surchargeParameters;
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

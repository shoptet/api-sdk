<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterRequest\CreateFilteringParameterRequest\Data;

class CreateFilteringParameterRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}

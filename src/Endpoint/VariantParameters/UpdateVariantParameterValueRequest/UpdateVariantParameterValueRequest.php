<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterValueRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterValueRequest\UpdateVariantParameterValueRequest\Data;

class UpdateVariantParameterValueRequest extends Entity
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

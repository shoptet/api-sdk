<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\AddAlternativeProductRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\AddAlternativeProductRequest\AddAlternativeProductRequest\Data;

class AddAlternativeProductRequest extends Entity
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

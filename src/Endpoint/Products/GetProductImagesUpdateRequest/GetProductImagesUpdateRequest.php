<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdateRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdateRequest\GetProductImagesUpdateRequest\Data;

class GetProductImagesUpdateRequest extends Entity
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

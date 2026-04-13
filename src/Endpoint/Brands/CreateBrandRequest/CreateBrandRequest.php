<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\BrandCreate;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CreateBrandRequest extends Entity
{
    protected BrandCreate $data;

    public function getData(): BrandCreate
    {
        return $this->data;
    }

    public function setData(BrandCreate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

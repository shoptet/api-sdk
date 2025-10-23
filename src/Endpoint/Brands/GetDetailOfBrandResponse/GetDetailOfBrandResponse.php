<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands\GetDetailOfBrandResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Brand;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;

class GetDetailOfBrandResponse extends Entity
{
    protected ?Brand $data;
    protected ?Errors $errors;

    public function getData(): ?Brand
    {
        return $this->data;
    }

    public function setData(?Brand $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }

    public function setErrors(?Errors $errors): static
    {
        $this->errors = $errors;
        return $this;
    }
}

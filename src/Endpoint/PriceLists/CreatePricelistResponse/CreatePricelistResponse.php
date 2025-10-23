<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;
use Shoptet\Api\Sdk\Php\Component\Entity\Pricelist;

class CreatePricelistResponse extends Entity
{
    protected ?Pricelist $data;
    protected ?Errors $errors;

    public function getData(): ?Pricelist
    {
        return $this->data;
    }

    public function setData(?Pricelist $data): static
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

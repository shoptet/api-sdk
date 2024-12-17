<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;
use Shoptet\Api\Sdk\Php\Component\Entity\Product;

class UpdateProductByCodeResponse extends Entity
{
    protected ?Product $data;
    protected ?Errors $errors;

    public function getData(): ?Product
    {
        return $this->data;
    }

    public function setData(?Product $data): static
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

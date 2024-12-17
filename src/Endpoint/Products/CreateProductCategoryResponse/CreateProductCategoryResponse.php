<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategoryResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Category;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;

class CreateProductCategoryResponse extends Entity
{
    protected ?Category $data;
    protected ?Errors $errors;

    public function getData(): ?Category
    {
        return $this->data;
    }

    public function setData(?Category $data): static
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

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Category;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;
use Shoptet\Api\Sdk\Php\Component\Entity\Metadata;

class UpdateProductCategoryResponse extends Entity
{
    protected ?Category $data;
    protected ?Errors $errors;
    protected ?Metadata $metadata;

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

    public function getMetadata(): ?Metadata
    {
        return $this->metadata;
    }

    public function setMetadata(?Metadata $metadata): static
    {
        $this->metadata = $metadata;
        return $this;
    }
}

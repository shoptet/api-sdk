<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\CategoryUpdate;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class UpdateProductCategoryRequest extends Entity
{
    protected CategoryUpdate $data;

    public function getData(): CategoryUpdate
    {
        return $this->data;
    }

    public function setData(CategoryUpdate $data): static
    {
        $this->data = $data;
        return $this;
    }
}

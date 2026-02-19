<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\CategoryProductPriorityBatchUpdate\Data;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class CategoryProductPriorityBatchUpdate extends Entity
{
    protected TypeGuid $categoryGuid;
    protected Data $data;

    public function getCategoryGuid(): TypeGuid
    {
        return $this->categoryGuid;
    }

    public function setCategoryGuid(TypeGuid $categoryGuid): static
    {
        $this->categoryGuid = $categoryGuid;
        return $this;
    }

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

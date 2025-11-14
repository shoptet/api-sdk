<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryResponse\CreateParametricCategoryResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryResponse\CreateParametricCategoryResponse\Data\ParametricCategory;

class Data extends Entity
{
    protected ParametricCategory $parametricCategory;

    public function getParametricCategory(): ParametricCategory
    {
        return $this->parametricCategory;
    }

    public function setParametricCategory(ParametricCategory $parametricCategory): static
    {
        $this->parametricCategory = $parametricCategory;
        return $this;
    }
}

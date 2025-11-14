<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\RecyclingFees\GetListOfRecyclingFeeCategoriesResponse\GetListOfRecyclingFeeCategoriesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\RecyclingFees\GetListOfRecyclingFeeCategoriesResponse\GetListOfRecyclingFeeCategoriesResponse\Data\RecyclingFeeCategories;

class Data extends Entity
{
    protected RecyclingFeeCategories $recyclingFeeCategories;

    public function getRecyclingFeeCategories(): RecyclingFeeCategories
    {
        return $this->recyclingFeeCategories;
    }

    public function setRecyclingFeeCategories(RecyclingFeeCategories $recyclingFeeCategories): static
    {
        $this->recyclingFeeCategories = $recyclingFeeCategories;
        return $this;
    }
}

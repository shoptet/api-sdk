<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscountsResponse\GetListOfXYDiscountsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscountsResponse\GetListOfXYDiscountsResponse\Data\Discounts;

class Data extends Entity
{
    protected Discounts $discounts;
    protected Paginator $paginator;

    public function getDiscounts(): Discounts
    {
        return $this->discounts;
    }

    public function setDiscounts(Discounts $discounts): static
    {
        $this->discounts = $discounts;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

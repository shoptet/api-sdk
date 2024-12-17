<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsReviewsResponse\GetListOfProductsReviewsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsReviewsResponse\GetListOfProductsReviewsResponse\Data\Reviews;

class Data extends Entity
{
    protected Reviews $reviews;
    protected Paginator $paginator;

    public function getReviews(): Reviews
    {
        return $this->reviews;
    }

    public function setReviews(Reviews $reviews): static
    {
        $this->reviews = $reviews;
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

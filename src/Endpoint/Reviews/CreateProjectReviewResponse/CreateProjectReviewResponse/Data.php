<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProjectReviewResponse\CreateProjectReviewResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ReviewProject;

class Data extends Entity
{
    protected ReviewProject $review;

    public function getReview(): ReviewProject
    {
        return $this->review;
    }

    public function setReview(ReviewProject $review): static
    {
        $this->review = $review;
        return $this;
    }
}

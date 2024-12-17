<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemarkRequest\UpdateCustomerRemarkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?string $rating;
    protected ?string $remark;

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): static
    {
        $this->rating = $rating;
        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }
}

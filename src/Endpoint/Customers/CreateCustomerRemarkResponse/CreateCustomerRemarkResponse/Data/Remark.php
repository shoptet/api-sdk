<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemarkResponse\CreateCustomerRemarkResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Remark extends Entity
{
    protected int $id;
    protected string $rating;
    protected string $remark;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function setRating(string $rating): static
    {
        $this->rating = $rating;
        return $this;
    }

    public function getRemark(): string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }
}

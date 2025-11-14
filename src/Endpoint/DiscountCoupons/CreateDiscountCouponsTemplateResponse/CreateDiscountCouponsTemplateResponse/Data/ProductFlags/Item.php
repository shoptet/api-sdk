<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse\Data\ProductFlags;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $code;
    protected string $title;
    protected string $condition;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }

    public function setCondition(string $condition): static
    {
        $this->condition = $condition;
        return $this;
    }
}

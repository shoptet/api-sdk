<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;

class ProductOrderableAmount extends Entity
{
    protected TypePositiveAmount $minimumAmount;
    protected TypePositiveAmount $maximumAmount;

    public function getMinimumAmount(): TypePositiveAmount
    {
        return $this->minimumAmount;
    }

    public function setMinimumAmount(TypePositiveAmount $minimumAmount): static
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    public function getMaximumAmount(): TypePositiveAmount
    {
        return $this->maximumAmount;
    }

    public function setMaximumAmount(TypePositiveAmount $maximumAmount): static
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }
}

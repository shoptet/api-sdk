<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;

class OrderableAmount extends Entity
{
    protected ?TypePositiveAmountNullable $minimumAmount;
    protected ?TypePositiveAmountNullable $maximumAmount;

    public function getMinimumAmount(): ?TypePositiveAmountNullable
    {
        return $this->minimumAmount;
    }

    public function setMinimumAmount(?TypePositiveAmountNullable $minimumAmount): static
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    public function getMaximumAmount(): ?TypePositiveAmountNullable
    {
        return $this->maximumAmount;
    }

    public function setMaximumAmount(?TypePositiveAmountNullable $maximumAmount): static
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }
}

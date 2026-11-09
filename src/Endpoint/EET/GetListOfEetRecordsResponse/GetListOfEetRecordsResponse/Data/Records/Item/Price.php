<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class Price extends Entity
{
    protected TypeCurrencyCode $currencyCode;
    protected TypePrice $total;
    protected TypePriceNullable $amountForLaterDrawdown;
    protected TypePriceNullable $drawdownOrSettlement;

    public function getCurrencyCode(): TypeCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(TypeCurrencyCode $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getTotal(): TypePrice
    {
        return $this->total;
    }

    public function setTotal(TypePrice $total): static
    {
        $this->total = $total;
        return $this;
    }

    public function getAmountForLaterDrawdown(): TypePriceNullable
    {
        return $this->amountForLaterDrawdown;
    }

    public function setAmountForLaterDrawdown(TypePriceNullable $amountForLaterDrawdown): static
    {
        $this->amountForLaterDrawdown = $amountForLaterDrawdown;
        return $this;
    }

    public function getDrawdownOrSettlement(): TypePriceNullable
    {
        return $this->drawdownOrSettlement;
    }

    public function setDrawdownOrSettlement(TypePriceNullable $drawdownOrSettlement): static
    {
        $this->drawdownOrSettlement = $drawdownOrSettlement;
        return $this;
    }
}

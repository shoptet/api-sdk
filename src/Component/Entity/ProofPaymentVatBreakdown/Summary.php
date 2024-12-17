<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentVatBreakdown;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Summary extends Entity
{
    protected TypePrice $withVat;
    protected TypePrice $withoutVat;
    protected TypePrice $vat;

    public function getWithVat(): TypePrice
    {
        return $this->withVat;
    }

    public function setWithVat(TypePrice $withVat): static
    {
        $this->withVat = $withVat;
        return $this;
    }

    public function getWithoutVat(): TypePrice
    {
        return $this->withoutVat;
    }

    public function setWithoutVat(TypePrice $withoutVat): static
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }

    public function getVat(): TypePrice
    {
        return $this->vat;
    }

    public function setVat(TypePrice $vat): static
    {
        $this->vat = $vat;
        return $this;
    }
}

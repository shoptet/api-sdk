<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class OrderPreAuthorization extends Entity
{
    protected bool $hasPendingPreAuthorization;
    protected TypePrice $preAuthorizationAmount;

    public function isHasPendingPreAuthorization(): bool
    {
        return $this->hasPendingPreAuthorization;
    }

    public function setHasPendingPreAuthorization(bool $hasPendingPreAuthorization): static
    {
        $this->hasPendingPreAuthorization = $hasPendingPreAuthorization;
        return $this;
    }

    public function getPreAuthorizationAmount(): TypePrice
    {
        return $this->preAuthorizationAmount;
    }

    public function setPreAuthorizationAmount(TypePrice $preAuthorizationAmount): static
    {
        $this->preAuthorizationAmount = $preAuthorizationAmount;
        return $this;
    }
}

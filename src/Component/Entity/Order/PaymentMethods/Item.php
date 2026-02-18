<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Order\PaymentMethods;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PaymentMethod;

class Item extends Entity
{
    protected PaymentMethod $paymentMethod;
    protected int $itemId;

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }
}

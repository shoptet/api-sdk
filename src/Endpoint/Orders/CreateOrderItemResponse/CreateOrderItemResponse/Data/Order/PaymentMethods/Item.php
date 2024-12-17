<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemResponse\CreateOrderItemResponse\Data\Order\PaymentMethods;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PaymentMethod;

class Item extends Entity
{
    protected PaymentMethod $paymentMethod;
    protected float $itemId;

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getItemId(): float
    {
        return $this->itemId;
    }

    public function setItemId(float $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }
}

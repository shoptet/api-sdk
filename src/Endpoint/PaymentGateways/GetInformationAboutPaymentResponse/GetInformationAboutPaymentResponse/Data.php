<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\GetInformationAboutPaymentResponse\GetInformationAboutPaymentResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $orderCode;
    protected string $returnUrl;

    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    public function setReturnUrl(string $returnUrl): static
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
}

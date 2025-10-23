<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\PaymentMethods;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\PaymentMethods\Wholesale\Methods;

class Wholesale extends Entity
{
    protected Methods $methods;
    protected ?string $defaultPayment;

    public function getMethods(): Methods
    {
        return $this->methods;
    }

    public function setMethods(Methods $methods): static
    {
        $this->methods = $methods;
        return $this;
    }

    public function getDefaultPayment(): ?string
    {
        return $this->defaultPayment;
    }

    public function setDefaultPayment(?string $defaultPayment): static
    {
        $this->defaultPayment = $defaultPayment;
        return $this;
    }
}

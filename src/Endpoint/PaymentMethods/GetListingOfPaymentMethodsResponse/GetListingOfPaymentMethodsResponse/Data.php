<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\GetListingOfPaymentMethodsResponse\GetListingOfPaymentMethodsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\GetListingOfPaymentMethodsResponse\GetListingOfPaymentMethodsResponse\Data\PaymentMethods;

class Data extends Entity
{
    protected PaymentMethods $paymentMethods;
    protected bool $wholesaleActive;
    protected ?string $defaultRetailMethod;
    protected ?string $defaultWholesaleMethod;

    public function getPaymentMethods(): PaymentMethods
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(PaymentMethods $paymentMethods): static
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    public function isWholesaleActive(): bool
    {
        return $this->wholesaleActive;
    }

    public function setWholesaleActive(bool $wholesaleActive): static
    {
        $this->wholesaleActive = $wholesaleActive;
        return $this;
    }

    public function getDefaultRetailMethod(): ?string
    {
        return $this->defaultRetailMethod;
    }

    public function setDefaultRetailMethod(?string $defaultRetailMethod): static
    {
        $this->defaultRetailMethod = $defaultRetailMethod;
        return $this;
    }

    public function getDefaultWholesaleMethod(): ?string
    {
        return $this->defaultWholesaleMethod;
    }

    public function setDefaultWholesaleMethod(?string $defaultWholesaleMethod): static
    {
        $this->defaultWholesaleMethod = $defaultWholesaleMethod;
        return $this;
    }
}

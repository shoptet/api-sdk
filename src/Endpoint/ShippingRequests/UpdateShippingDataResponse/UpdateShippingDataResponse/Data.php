<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataResponse\UpdateShippingDataResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $verificationCode;

    public function getVerificationCode(): string
    {
        return $this->verificationCode;
    }

    public function setVerificationCode(string $verificationCode): static
    {
        $this->verificationCode = $verificationCode;
        return $this;
    }
}

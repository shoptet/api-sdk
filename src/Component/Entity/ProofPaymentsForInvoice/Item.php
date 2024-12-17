<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentsForInvoice;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentVatBreakdown;

class Item extends Entity
{
    protected string $code;
    protected ProofPaymentVatBreakdown $vatBreakdown;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getVatBreakdown(): ProofPaymentVatBreakdown
    {
        return $this->vatBreakdown;
    }

    public function setVatBreakdown(ProofPaymentVatBreakdown $vatBreakdown): static
    {
        $this->vatBreakdown = $vatBreakdown;
        return $this;
    }
}

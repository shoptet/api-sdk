<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPaymentRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPaymentRequest\UpdateProofPaymentRequest\Data;

class UpdateProofPaymentRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}

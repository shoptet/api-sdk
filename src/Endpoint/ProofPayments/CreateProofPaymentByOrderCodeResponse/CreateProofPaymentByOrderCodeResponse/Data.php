<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByOrderCodeResponse\CreateProofPaymentByOrderCodeResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentDetail;

class Data extends Entity
{
    protected ProofPaymentDetail $proofPayments;

    public function getProofPayments(): ProofPaymentDetail
    {
        return $this->proofPayments;
    }

    public function setProofPayments(ProofPaymentDetail $proofPayments): static
    {
        $this->proofPayments = $proofPayments;
        return $this;
    }
}

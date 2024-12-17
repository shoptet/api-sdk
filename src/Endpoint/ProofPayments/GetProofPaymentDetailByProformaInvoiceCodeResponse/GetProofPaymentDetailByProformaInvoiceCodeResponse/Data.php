<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByProformaInvoiceCodeResponse\GetProofPaymentDetailByProformaInvoiceCodeResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByProformaInvoiceCodeResponse\GetProofPaymentDetailByProformaInvoiceCodeResponse\Data\ProofPayments;

class Data extends Entity
{
    protected ProofPayments $proofPayments;

    public function getProofPayments(): ProofPayments
    {
        return $this->proofPayments;
    }

    public function setProofPayments(ProofPayments $proofPayments): static
    {
        $this->proofPayments = $proofPayments;
        return $this;
    }
}

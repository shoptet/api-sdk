<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest\InvoiceLinkProofPaymentsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest\InvoiceLinkProofPaymentsRequest\Data\ProofPaymentCodes;

class Data extends Entity
{
    protected ProofPaymentCodes $proofPaymentCodes;

    public function getProofPaymentCodes(): ProofPaymentCodes
    {
        return $this->proofPaymentCodes;
    }

    public function setProofPaymentCodes(ProofPaymentCodes $proofPaymentCodes): static
    {
        $this->proofPaymentCodes = $proofPaymentCodes;
        return $this;
    }
}

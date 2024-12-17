<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChangesResponse\GetLastProofPaymentsChangesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChangesResponse\GetLastProofPaymentsChangesResponse\Data\Changes;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChangesResponse\GetLastProofPaymentsChangesResponse\Data\Paginator;

class Data extends Entity
{
    protected Changes $changes;
    protected Paginator $paginator;

    public function getChanges(): Changes
    {
        return $this->changes;
    }

    public function setChanges(Changes $changes): static
    {
        $this->changes = $changes;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

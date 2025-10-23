<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\ProofPaymentDocumentSettingsRequest\ProofPaymentDocumentSettingsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?bool $unlink;
    protected ?bool $closed;

    public function getUnlink(): ?bool
    {
        return $this->unlink;
    }

    public function setUnlink(?bool $unlink): static
    {
        $this->unlink = $unlink;
        return $this;
    }

    public function getClosed(): ?bool
    {
        return $this->closed;
    }

    public function setClosed(?bool $closed): static
    {
        $this->closed = $closed;
        return $this;
    }
}

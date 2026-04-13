<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatusesResponse\GetListOfOrderStatusesResponse\Data\Statuses\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Documents extends Entity
{
    protected bool $generateProformaInvoice;
    protected bool $generateInvoice;
    protected bool $generateDeliveryNote;
    protected ?bool $generateProofPayment;

    public function isGenerateProformaInvoice(): bool
    {
        return $this->generateProformaInvoice;
    }

    public function setGenerateProformaInvoice(bool $generateProformaInvoice): static
    {
        $this->generateProformaInvoice = $generateProformaInvoice;
        return $this;
    }

    public function isGenerateInvoice(): bool
    {
        return $this->generateInvoice;
    }

    public function setGenerateInvoice(bool $generateInvoice): static
    {
        $this->generateInvoice = $generateInvoice;
        return $this;
    }

    public function isGenerateDeliveryNote(): bool
    {
        return $this->generateDeliveryNote;
    }

    public function setGenerateDeliveryNote(bool $generateDeliveryNote): static
    {
        $this->generateDeliveryNote = $generateDeliveryNote;
        return $this;
    }

    public function getGenerateProofPayment(): ?bool
    {
        return $this->generateProofPayment;
    }

    public function setGenerateProofPayment(?bool $generateProofPayment): static
    {
        $this->generateProofPayment = $generateProofPayment;
        return $this;
    }
}

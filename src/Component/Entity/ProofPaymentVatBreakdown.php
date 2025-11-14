<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentVatBreakdown\Items;
use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentVatBreakdown\Summary;

class ProofPaymentVatBreakdown extends Entity
{
    protected Items $items;
    protected Summary $summary;

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): static
    {
        $this->items = $items;
        return $this;
    }

    public function getSummary(): Summary
    {
        return $this->summary;
    }

    public function setSummary(Summary $summary): static
    {
        $this->summary = $summary;
        return $this;
    }
}

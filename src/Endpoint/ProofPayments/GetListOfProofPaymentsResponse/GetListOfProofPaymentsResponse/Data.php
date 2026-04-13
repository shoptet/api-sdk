<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfProofPaymentsResponse\GetListOfProofPaymentsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfProofPaymentsResponse\GetListOfProofPaymentsResponse\Data\Items;

class Data extends Entity
{
    protected Items $items;
    protected Paginator $paginator;

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): static
    {
        $this->items = $items;
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

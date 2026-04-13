<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfDeliveryNotesResponse\GetListOfDeliveryNotesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfDeliveryNotesResponse\GetListOfDeliveryNotesResponse\Data\DeliveryNotes;

class Data extends Entity
{
    protected DeliveryNotes $deliveryNotes;
    protected Paginator $paginator;

    public function getDeliveryNotes(): DeliveryNotes
    {
        return $this->deliveryNotes;
    }

    public function setDeliveryNotes(DeliveryNotes $deliveryNotes): static
    {
        $this->deliveryNotes = $deliveryNotes;
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

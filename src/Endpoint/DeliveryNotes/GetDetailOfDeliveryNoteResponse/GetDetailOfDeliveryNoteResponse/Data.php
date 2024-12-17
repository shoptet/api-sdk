<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNoteResponse\GetDetailOfDeliveryNoteResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNoteResponse\GetDetailOfDeliveryNoteResponse\Data\DeliveryNote;

class Data extends Entity
{
    protected DeliveryNote $deliveryNote;

    public function getDeliveryNote(): DeliveryNote
    {
        return $this->deliveryNote;
    }

    public function setDeliveryNote(DeliveryNote $deliveryNote): static
    {
        $this->deliveryNote = $deliveryNote;
        return $this;
    }
}

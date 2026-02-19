<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DeliveryNoteFromOrderResponse\DeliveryNoteFromOrderResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\DeliveryNote;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

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

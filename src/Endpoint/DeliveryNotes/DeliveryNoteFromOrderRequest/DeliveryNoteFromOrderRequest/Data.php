<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DeliveryNoteFromOrderRequest\DeliveryNoteFromOrderRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;

class Data extends Entity
{
    protected string $code;
    protected ?TypeDate $date;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getDate(): ?TypeDate
    {
        return $this->date;
    }

    public function setDate(?TypeDate $date): static
    {
        $this->date = $date;
        return $this;
    }
}

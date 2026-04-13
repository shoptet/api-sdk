<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrderRequest\UpdateRemarksForOrderRequest\Data\AdditionalFields;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $index;
    protected ?string $text;

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): static
    {
        $this->index = $index;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;
        return $this;
    }
}

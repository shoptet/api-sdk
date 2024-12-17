<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusResponse\UpdateOrderStatusResponse\Data\Order\Notes\AdditionalFields;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $index;
    protected string $label;
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

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
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

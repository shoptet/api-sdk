<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRemarkRequest\CreateOrderRemarkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $text;
    protected ?string $type;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }
}

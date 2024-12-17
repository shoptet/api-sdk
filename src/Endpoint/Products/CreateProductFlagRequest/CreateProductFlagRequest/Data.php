<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlagRequest\CreateProductFlagRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;

class Data extends Entity
{
    protected string $title;
    protected ?TypeColor $color;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getColor(): ?TypeColor
    {
        return $this->color;
    }

    public function setColor(?TypeColor $color): static
    {
        $this->color = $color;
        return $this;
    }
}

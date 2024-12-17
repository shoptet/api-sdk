<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Fonts extends Entity
{
    protected string $heading;
    protected string $text;

    public function getHeading(): string
    {
        return $this->heading;
    }

    public function setHeading(string $heading): static
    {
        $this->heading = $heading;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }
}

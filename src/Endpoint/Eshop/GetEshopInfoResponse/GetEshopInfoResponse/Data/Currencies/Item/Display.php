<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Currencies\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Display extends Entity
{
    protected string $text;
    protected string $location;
    protected string $decimalsSeparator;
    protected ?string $thousandsSeparator;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;
        return $this;
    }

    public function getDecimalsSeparator(): string
    {
        return $this->decimalsSeparator;
    }

    public function setDecimalsSeparator(string $decimalsSeparator): static
    {
        $this->decimalsSeparator = $decimalsSeparator;
        return $this;
    }

    public function getThousandsSeparator(): ?string
    {
        return $this->thousandsSeparator;
    }

    public function setThousandsSeparator(?string $thousandsSeparator): static
    {
        $this->thousandsSeparator = $thousandsSeparator;
        return $this;
    }
}

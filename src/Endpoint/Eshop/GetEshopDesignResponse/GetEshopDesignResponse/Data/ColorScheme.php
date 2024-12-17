<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ColorScheme extends Entity
{
    protected string $conversionColor;
    protected string $conversionColorHover;
    protected string $color1;
    protected string $color2;
    protected string $color3;
    protected string $color4;

    public function getConversionColor(): string
    {
        return $this->conversionColor;
    }

    public function setConversionColor(string $conversionColor): static
    {
        $this->conversionColor = $conversionColor;
        return $this;
    }

    public function getConversionColorHover(): string
    {
        return $this->conversionColorHover;
    }

    public function setConversionColorHover(string $conversionColorHover): static
    {
        $this->conversionColorHover = $conversionColorHover;
        return $this;
    }

    public function getColor1(): string
    {
        return $this->color1;
    }

    public function setColor1(string $color1): static
    {
        $this->color1 = $color1;
        return $this;
    }

    public function getColor2(): string
    {
        return $this->color2;
    }

    public function setColor2(string $color2): static
    {
        $this->color2 = $color2;
        return $this;
    }

    public function getColor3(): string
    {
        return $this->color3;
    }

    public function setColor3(string $color3): static
    {
        $this->color3 = $color3;
        return $this;
    }

    public function getColor4(): string
    {
        return $this->color4;
    }

    public function setColor4(string $color4): static
    {
        $this->color4 = $color4;
        return $this;
    }
}

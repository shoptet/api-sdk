<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\Background;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\ColorScheme;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\Fonts;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\Header;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\Layout;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\Template;

class Data extends Entity
{
    protected Template $template;
    protected Layout $layout;
    protected ColorScheme $colorScheme;
    protected Fonts $fonts;
    protected Header $header;
    protected Background $background;

    public function getTemplate(): Template
    {
        return $this->template;
    }

    public function setTemplate(Template $template): static
    {
        $this->template = $template;
        return $this;
    }

    public function getLayout(): Layout
    {
        return $this->layout;
    }

    public function setLayout(Layout $layout): static
    {
        $this->layout = $layout;
        return $this;
    }

    public function getColorScheme(): ColorScheme
    {
        return $this->colorScheme;
    }

    public function setColorScheme(ColorScheme $colorScheme): static
    {
        $this->colorScheme = $colorScheme;
        return $this;
    }

    public function getFonts(): Fonts
    {
        return $this->fonts;
    }

    public function setFonts(Fonts $fonts): static
    {
        $this->fonts = $fonts;
        return $this;
    }

    public function getHeader(): Header
    {
        return $this->header;
    }

    public function setHeader(Header $header): static
    {
        $this->header = $header;
        return $this;
    }

    public function getBackground(): Background
    {
        return $this->background;
    }

    public function setBackground(Background $background): static
    {
        $this->background = $background;
        return $this;
    }
}

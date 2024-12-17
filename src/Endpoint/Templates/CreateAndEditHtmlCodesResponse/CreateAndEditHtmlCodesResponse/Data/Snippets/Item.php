<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesResponse\CreateAndEditHtmlCodesResponse\Data\Snippets;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $location;
    protected string $html;

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;
        return $this;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function setHtml(string $html): static
    {
        $this->html = $html;
        return $this;
    }
}

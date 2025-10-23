<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesRequest\CreateAndEditHtmlCodesRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesRequest\CreateAndEditHtmlCodesRequest\Data\Snippets;

class Data extends Entity
{
    protected Snippets $snippets;

    public function getSnippets(): Snippets
    {
        return $this->snippets;
    }

    public function setSnippets(Snippets $snippets): static
    {
        $this->snippets = $snippets;
        return $this;
    }
}

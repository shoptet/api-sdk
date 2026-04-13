<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticleSectionsResponse\GetListOfArticleSectionsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticleSectionsResponse\GetListOfArticleSectionsResponse\Data\Sections;

class Data extends Entity
{
    protected Sections $sections;

    public function getSections(): Sections
    {
        return $this->sections;
    }

    public function setSections(Sections $sections): static
    {
        $this->sections = $sections;
        return $this;
    }
}

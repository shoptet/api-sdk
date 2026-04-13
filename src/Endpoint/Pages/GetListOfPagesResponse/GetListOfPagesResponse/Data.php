<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPagesResponse\GetListOfPagesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPagesResponse\GetListOfPagesResponse\Data\Pages;

class Data extends Entity
{
    protected Pages $pages;
    protected Paginator $paginator;

    public function getPages(): Pages
    {
        return $this->pages;
    }

    public function setPages(Pages $pages): static
    {
        $this->pages = $pages;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

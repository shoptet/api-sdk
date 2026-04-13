<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages\GetDetailOfPageResponse\GetDetailOfPageResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Page;

class Data extends Entity
{
    protected Page $page;

    public function getPage(): Page
    {
        return $this->page;
    }

    public function setPage(Page $page): static
    {
        $this->page = $page;
        return $this;
    }
}

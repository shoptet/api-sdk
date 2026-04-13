<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class Paginator extends Entity
{
    protected int $totalCount;
    protected int $page;
    protected int $pageCount;
    protected int $itemsOnPage;
    protected int $itemsPerPage;

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): static
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): static
    {
        $this->page = $page;
        return $this;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): static
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function getItemsOnPage(): int
    {
        return $this->itemsOnPage;
    }

    public function setItemsOnPage(int $itemsOnPage): static
    {
        $this->itemsOnPage = $itemsOnPage;
        return $this;
    }

    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    public function setItemsPerPage(int $itemsPerPage): static
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
}

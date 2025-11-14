<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChangesResponse\GetLastProofPaymentsChangesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Paginator extends Entity
{
    protected float $totalCount;
    protected float $page;
    protected float $pageCount;
    protected float $itemsOnPage;
    protected float $itemsPerPage;

    public function getTotalCount(): float
    {
        return $this->totalCount;
    }

    public function setTotalCount(float $totalCount): static
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getPage(): float
    {
        return $this->page;
    }

    public function setPage(float $page): static
    {
        $this->page = $page;
        return $this;
    }

    public function getPageCount(): float
    {
        return $this->pageCount;
    }

    public function setPageCount(float $pageCount): static
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function getItemsOnPage(): float
    {
        return $this->itemsOnPage;
    }

    public function setItemsOnPage(float $itemsOnPage): static
    {
        $this->itemsOnPage = $itemsOnPage;
        return $this;
    }

    public function getItemsPerPage(): float
    {
        return $this->itemsPerPage;
    }

    public function setItemsPerPage(float $itemsPerPage): static
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
}

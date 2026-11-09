<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records;

class Data extends Entity
{
    protected Records $records;
    protected Paginator $paginator;

    public function getRecords(): Records
    {
        return $this->records;
    }

    public function setRecords(Records $records): static
    {
        $this->records = $records;
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

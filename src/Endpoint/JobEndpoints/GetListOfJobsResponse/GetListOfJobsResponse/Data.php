<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetListOfJobsResponse\GetListOfJobsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetListOfJobsResponse\GetListOfJobsResponse\Data\Jobs;

class Data extends Entity
{
    protected Jobs $jobs;
    protected Paginator $paginator;

    public function getJobs(): Jobs
    {
        return $this->jobs;
    }

    public function setJobs(Jobs $jobs): static
    {
        $this->jobs = $jobs;
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

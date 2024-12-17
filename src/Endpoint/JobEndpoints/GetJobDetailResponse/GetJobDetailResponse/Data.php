<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetJobDetailResponse\GetJobDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetJobDetailResponse\GetJobDetailResponse\Data\Job;

class Data extends Entity
{
    protected Job $job;

    public function getJob(): Job
    {
        return $this->job;
    }

    public function setJob(Job $job): static
    {
        $this->job = $job;
        return $this;
    }
}

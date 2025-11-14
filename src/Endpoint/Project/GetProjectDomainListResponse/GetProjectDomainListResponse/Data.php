<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectDomainListResponse\GetProjectDomainListResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectDomainListResponse\GetProjectDomainListResponse\Data\Domains;

class Data extends Entity
{
    protected Domains $domains;

    public function getDomains(): Domains
    {
        return $this->domains;
    }

    public function setDomains(Domains $domains): static
    {
        $this->domains = $domains;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionListResponse\GetDetailOfEmailDistributionListResponse\Data\Emails;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Item extends Entity
{
    protected string $email;
    protected TypeDateTime $added;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getAdded(): TypeDateTime
    {
        return $this->added;
    }

    public function setAdded(TypeDateTime $added): static
    {
        $this->added = $added;
        return $this;
    }
}

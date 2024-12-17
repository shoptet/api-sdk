<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemarkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemarkRequest\CreateCustomerRemarkRequest\Schema;

class CreateCustomerRemarkRequest extends Entity
{
    protected ?Schema $schema;

    public function getSchema(): ?Schema
    {
        return $this->schema;
    }

    public function setSchema(?Schema $schema): static
    {
        $this->schema = $schema;
        return $this;
    }
}

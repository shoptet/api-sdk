<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages\DeletePageResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;
use Shoptet\Api\Sdk\Php\Component\Entity\Metadata;

class DeletePageResponse extends Entity
{
    protected null $data;
    protected ?Errors $errors;
    protected ?Metadata $metadata;

    public function getData(): null
    {
        return $this->data;
    }

    public function setData(null $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }

    public function setErrors(?Errors $errors): static
    {
        $this->errors = $errors;
        return $this;
    }

    public function getMetadata(): ?Metadata
    {
        return $this->metadata;
    }

    public function setMetadata(?Metadata $metadata): static
    {
        $this->metadata = $metadata;
        return $this;
    }
}

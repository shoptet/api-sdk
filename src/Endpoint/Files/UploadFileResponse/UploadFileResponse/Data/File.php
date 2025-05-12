<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileResponse\UploadFileResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class File extends Entity
{
    protected string $name;
    protected ?TypeDateTimeNullable $created;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCreated(): ?TypeDateTimeNullable
    {
        return $this->created;
    }

    public function setCreated(?TypeDateTimeNullable $created): static
    {
        $this->created = $created;
        return $this;
    }
}

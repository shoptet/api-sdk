<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class LastError extends Entity
{
    protected int $code;
    protected ?string $message;

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;
        return $this;
    }
}

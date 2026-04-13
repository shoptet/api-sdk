<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Errors;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $errorCode;
    protected string $message;
    protected string $instance;

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): static
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;
        return $this;
    }

    public function getInstance(): string
    {
        return $this->instance;
    }

    public function setInstance(string $instance): static
    {
        $this->instance = $instance;
        return $this;
    }
}

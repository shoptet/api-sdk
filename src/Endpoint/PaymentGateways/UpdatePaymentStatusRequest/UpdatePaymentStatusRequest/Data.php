<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\UpdatePaymentStatusRequest\UpdatePaymentStatusRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $status;
    protected ?string $message;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
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

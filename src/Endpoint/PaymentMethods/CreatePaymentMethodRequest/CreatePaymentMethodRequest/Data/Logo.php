<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethodRequest\CreatePaymentMethodRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Logo extends Entity
{
    protected string $filename;
    protected string $content;

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): static
    {
        $this->filename = $filename;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }
}

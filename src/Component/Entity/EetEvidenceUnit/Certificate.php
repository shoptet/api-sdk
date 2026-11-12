<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\EetEvidenceUnit;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Certificate extends Entity
{
    protected string $eic;
    protected string $environment;
    protected TypeDateTime $validTo;

    public function getEic(): string
    {
        return $this->eic;
    }

    public function setEic(string $eic): static
    {
        $this->eic = $eic;
        return $this;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function setEnvironment(string $environment): static
    {
        $this->environment = $environment;
        return $this;
    }

    public function getValidTo(): TypeDateTime
    {
        return $this->validTo;
    }

    public function setValidTo(TypeDateTime $validTo): static
    {
        $this->validTo = $validTo;
        return $this;
    }
}

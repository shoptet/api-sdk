<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GenerateWebhookSignatureKeyResponse\GenerateWebhookSignatureKeyResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $signatureKey;

    public function getSignatureKey(): string
    {
        return $this->signatureKey;
    }

    public function setSignatureKey(string $signatureKey): static
    {
        $this->signatureKey = $signatureKey;
        return $this;
    }
}

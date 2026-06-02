<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\UpdateExistingWebhookRequest\UpdateExistingWebhookRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?string $url;
    protected ?string $sendPayload;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getSendPayload(): ?string
    {
        return $this->sendPayload;
    }

    public function setSendPayload(?string $sendPayload): static
    {
        $this->sendPayload = $sendPayload;
        return $this;
    }
}

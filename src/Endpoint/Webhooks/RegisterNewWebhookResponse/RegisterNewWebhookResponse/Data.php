<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookResponse\RegisterNewWebhookResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookResponse\RegisterNewWebhookResponse\Data\Webhooks;

class Data extends Entity
{
    protected Webhooks $webhooks;

    public function getWebhooks(): Webhooks
    {
        return $this->webhooks;
    }

    public function setWebhooks(Webhooks $webhooks): static
    {
        $this->webhooks = $webhooks;
        return $this;
    }
}

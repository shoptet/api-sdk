<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetDetailOfRegisteredWebhooksResponse\GetDetailOfRegisteredWebhooksResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Webhook;

class Data extends Entity
{
    protected Webhook $webhook;

    public function getWebhook(): Webhook
    {
        return $this->webhook;
    }

    public function setWebhook(Webhook $webhook): static
    {
        $this->webhook = $webhook;
        return $this;
    }
}

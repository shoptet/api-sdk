<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetOverviewOfRegisteredWebhooksResponse\GetOverviewOfRegisteredWebhooksResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetOverviewOfRegisteredWebhooksResponse\GetOverviewOfRegisteredWebhooksResponse\Data\Webhooks;

class Data extends Entity
{
    protected Webhooks $webhooks;
    protected Paginator $paginator;

    public function getWebhooks(): Webhooks
    {
        return $this->webhooks;
    }

    public function setWebhooks(Webhooks $webhooks): static
    {
        $this->webhooks = $webhooks;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

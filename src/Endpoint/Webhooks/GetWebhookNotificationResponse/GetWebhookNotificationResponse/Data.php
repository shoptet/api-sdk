<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetWebhookNotificationResponse\GetWebhookNotificationResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetWebhookNotificationResponse\GetWebhookNotificationResponse\Data\Notifications;

class Data extends Entity
{
    protected Notifications $notifications;
    protected Paginator $paginator;

    public function getNotifications(): Notifications
    {
        return $this->notifications;
    }

    public function setNotifications(Notifications $notifications): static
    {
        $this->notifications = $notifications;
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

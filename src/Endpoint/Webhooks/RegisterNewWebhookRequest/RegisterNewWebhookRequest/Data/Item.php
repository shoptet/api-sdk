<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookRequest\RegisterNewWebhookRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Webhook\Event;

class Item extends Entity
{
    protected string $event;
    protected string $url;

    public function getEvent(): string
    {
        return $this->event;
    }

    public function setEvent(Event|string $event): static
    {
        if (is_string($event)) {
            if (Event::tryFrom($event) === null) {
                throw new InvalidArgumentException(sprintf('"%s" is not valid webhook event type value', $event));
            }
        } else {
            $event = $event->value;
        }
        $this->event = $event;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class NotificationData extends Entity
{
    protected int $eshopId;
    protected string $event;
    protected TypeDateTime $eventCreated;
    protected string $eventInstance;

    public function getEshopId(): int
    {
        return $this->eshopId;
    }

    public function setEshopId(int $eshopId): static
    {
        $this->eshopId = $eshopId;
        return $this;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function setEvent(string $event): static
    {
        $this->event = $event;
        return $this;
    }

    public function getEventCreated(): TypeDateTime
    {
        return $this->eventCreated;
    }

    public function setEventCreated(TypeDateTime $eventCreated): static
    {
        $this->eventCreated = $eventCreated;
        return $this;
    }

    public function getEventInstance(): string
    {
        return $this->eventInstance;
    }

    public function setEventInstance(string $eventInstance): static
    {
        $this->eventInstance = $eventInstance;
        return $this;
    }
}

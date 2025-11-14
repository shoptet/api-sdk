<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class WebhookNotification extends Entity
{
    protected int $id;
    protected int $webhookId;
    protected string $webhookUrl;
    protected string $event;
    protected TypeDateTimeNullable $eventCreated;
    protected TypeDateTimeNullable $created;
    protected TypeDateTimeNullable $attempted;
    protected int $attempts;
    protected string $status;
    protected bool $active;
    protected NotificationData $data;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getWebhookId(): int
    {
        return $this->webhookId;
    }

    public function setWebhookId(int $webhookId): static
    {
        $this->webhookId = $webhookId;
        return $this;
    }

    public function getWebhookUrl(): string
    {
        return $this->webhookUrl;
    }

    public function setWebhookUrl(string $webhookUrl): static
    {
        $this->webhookUrl = $webhookUrl;
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

    public function getEventCreated(): TypeDateTimeNullable
    {
        return $this->eventCreated;
    }

    public function setEventCreated(TypeDateTimeNullable $eventCreated): static
    {
        $this->eventCreated = $eventCreated;
        return $this;
    }

    public function getCreated(): TypeDateTimeNullable
    {
        return $this->created;
    }

    public function setCreated(TypeDateTimeNullable $created): static
    {
        $this->created = $created;
        return $this;
    }

    public function getAttempted(): TypeDateTimeNullable
    {
        return $this->attempted;
    }

    public function setAttempted(TypeDateTimeNullable $attempted): static
    {
        $this->attempted = $attempted;
        return $this;
    }

    public function getAttempts(): int
    {
        return $this->attempts;
    }

    public function setAttempts(int $attempts): static
    {
        $this->attempts = $attempts;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;
        return $this;
    }

    public function getData(): NotificationData
    {
        return $this->data;
    }

    public function setData(NotificationData $data): static
    {
        $this->data = $data;
        return $this;
    }
}

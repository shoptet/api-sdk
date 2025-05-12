<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Webhook extends Entity
{
    protected int $id;
    protected string $event;
    protected string $url;
    protected TypeDateTimeNullable $created;
    protected TypeDateTimeNullable $updated;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
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

    public function getUpdated(): TypeDateTimeNullable
    {
        return $this->updated;
    }

    public function setUpdated(TypeDateTimeNullable $updated): static
    {
        $this->updated = $updated;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Webhook extends Entity
{
    protected int $id;
    protected string $event;
    protected string $url;
    protected TypeDateTime $created;
    protected TypeDateTime $updated;

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

    public function getCreated(): TypeDateTime
    {
        return $this->created;
    }

    public function setCreated(TypeDateTime $created): static
    {
        $this->created = $created;
        return $this;
    }

    public function getUpdated(): TypeDateTime
    {
        return $this->updated;
    }

    public function setUpdated(TypeDateTime $updated): static
    {
        $this->updated = $updated;
        return $this;
    }
}

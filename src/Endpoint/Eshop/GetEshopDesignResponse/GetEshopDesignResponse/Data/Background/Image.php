<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data\Background;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Image extends Entity
{
    protected ?string $url;
    protected string $attachment;
    protected string $position;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getAttachment(): string
    {
        return $this->attachment;
    }

    public function setAttachment(string $attachment): static
    {
        $this->attachment = $attachment;
        return $this;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): static
    {
        $this->position = $position;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostRequest\UpdateDiscussionPostRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Data extends Entity
{
    protected ?string $name;
    protected ?string $email;
    protected ?string $title;
    protected ?string $content;
    protected ?TypeDateTimeNullable $creationDate;
    protected ?bool $authorized;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getCreationDate(): ?TypeDateTimeNullable
    {
        return $this->creationDate;
    }

    public function setCreationDate(?TypeDateTimeNullable $creationDate): static
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    public function getAuthorized(): ?bool
    {
        return $this->authorized;
    }

    public function setAuthorized(?bool $authorized): static
    {
        $this->authorized = $authorized;
        return $this;
    }
}

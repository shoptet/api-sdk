<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProjectReviewRequest\UpdateProjectReviewRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProjectReviewRequest\UpdateProjectReviewRequest\Data\Reaction;

class Data extends Entity
{
    protected ?string $description;
    protected ?string $fullName;
    protected ?bool $visible;
    protected ?Reaction $reaction;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getReaction(): ?Reaction
    {
        return $this->reaction;
    }

    public function setReaction(?Reaction $reaction): static
    {
        $this->reaction = $reaction;
        return $this;
    }
}

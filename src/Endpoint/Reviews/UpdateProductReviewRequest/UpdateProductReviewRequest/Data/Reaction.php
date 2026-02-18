<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProductReviewRequest\UpdateProductReviewRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Reaction extends Entity
{
    protected ?string $reactionFullName;
    protected ?string $reactionEmail;
    protected ?string $reactionText;

    public function getReactionFullName(): ?string
    {
        return $this->reactionFullName;
    }

    public function setReactionFullName(?string $reactionFullName): static
    {
        $this->reactionFullName = $reactionFullName;
        return $this;
    }

    public function getReactionEmail(): ?string
    {
        return $this->reactionEmail;
    }

    public function setReactionEmail(?string $reactionEmail): static
    {
        $this->reactionEmail = $reactionEmail;
        return $this;
    }

    public function getReactionText(): ?string
    {
        return $this->reactionText;
    }

    public function setReactionText(?string $reactionText): static
    {
        $this->reactionText = $reactionText;
        return $this;
    }
}

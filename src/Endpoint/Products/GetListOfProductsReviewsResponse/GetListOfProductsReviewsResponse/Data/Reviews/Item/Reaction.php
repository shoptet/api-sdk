<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsReviewsResponse\GetListOfProductsReviewsResponse\Data\Reviews\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Reaction extends Entity
{
    protected ?TypeDateTime $reactionCreated;
    protected ?string $reactionFullName;
    protected ?string $reactionEmail;
    protected ?string $reactionText;

    public function getReactionCreated(): ?TypeDateTime
    {
        return $this->reactionCreated;
    }

    public function setReactionCreated(?TypeDateTime $reactionCreated): static
    {
        $this->reactionCreated = $reactionCreated;
        return $this;
    }

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

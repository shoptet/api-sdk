<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfEshopReviewsResponse\GetListOfEshopReviewsResponse\Data\Reviews\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class Reaction extends Entity
{
    protected TypeDateTimeNullable $reactionCreated;
    protected ?string $reactionFullName;
    protected ?string $reactionEmail;
    protected ?string $reactionText;

    public function getReactionCreated(): TypeDateTimeNullable
    {
        return $this->reactionCreated;
    }

    public function setReactionCreated(TypeDateTimeNullable $reactionCreated): static
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

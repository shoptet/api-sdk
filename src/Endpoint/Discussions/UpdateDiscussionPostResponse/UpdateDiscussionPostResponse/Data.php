<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostResponse\UpdateDiscussionPostResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\DiscussionPost;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected DiscussionPost $discussion;

    public function getDiscussion(): DiscussionPost
    {
        return $this->discussion;
    }

    public function setDiscussion(DiscussionPost $discussion): static
    {
        $this->discussion = $discussion;
        return $this;
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPostsResponse\GetListOfDiscussionPostsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPostsResponse\GetListOfDiscussionPostsResponse\Data\Discussion;

class Data extends Entity
{
    protected Discussion $discussion;
    protected Paginator $paginator;

    public function getDiscussion(): Discussion
    {
        return $this->discussion;
    }

    public function setDiscussion(Discussion $discussion): static
    {
        $this->discussion = $discussion;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}

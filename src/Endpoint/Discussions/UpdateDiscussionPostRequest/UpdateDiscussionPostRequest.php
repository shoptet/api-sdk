<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostRequest\UpdateDiscussionPostRequest\Data;

class UpdateDiscussionPostRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}

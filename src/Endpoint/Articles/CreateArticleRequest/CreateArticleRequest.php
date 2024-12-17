<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleRequest\CreateArticleRequest\Data1;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleRequest\CreateArticleRequest\Data2;

class CreateArticleRequest extends Entity
{
    protected Data1|Data2 $data;

    public function getData(): Data1|Data2
    {
        return $this->data;
    }

    public function setData(Data1|Data2 $data): static
    {
        $this->data = $data;
        return $this;
    }
}

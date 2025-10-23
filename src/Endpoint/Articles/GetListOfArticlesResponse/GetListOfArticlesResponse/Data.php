<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticlesResponse\GetListOfArticlesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticlesResponse\GetListOfArticlesResponse\Data\Articles;

class Data extends Entity
{
    protected Articles $articles;
    protected Paginator $paginator;

    public function getArticles(): Articles
    {
        return $this->articles;
    }

    public function setArticles(Articles $articles): static
    {
        $this->articles = $articles;
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
